all: regular_bindings perl_bindings

regular_bindings: flow-messages-enriched.proto
	mkdir -p cpp csharp go java js objc php python ruby rust
	protoc \
	    --cpp_out=cpp \
	    --csharp_out=csharp \
	    --go_out=go \
	    --java_out=java \
	    --js_out=js \
	    --objc_out=objc \
	    --php_out=php \
	    --python_out=python \
	    --ruby_out=ruby \
	    --rust_out=rust \
	    ./flow-messages-enriched.proto

perl_bindings: flow-messages-enriched.proto
	tail -n +7 flow-messages-enriched.proto | \
	    sed -e "s/string/required string/" | \
	    sed -e "s/uint32/required uint32/" | \
	    sed -e "s/uint64/required uint64/" | \
	    sed -e "s/bytes/required bytes/" | \
	    sed -e "s/  DirectionType/  required DirectionType/" | \
	    sed -e "s/  NormalizedType/  required NormalizedType/" | \
	    sed -e "s/  FlowType/  required FlowType/" | \
	    sed -e "s/  IPType/  required IPType/" \
	    > ./perl/flow-messages-enriched-elaborate.proto
	perl perl/make.pl ./perl/flow-messages-enriched-elaborate.proto ./perl/FlowMessagesEnriched.pm
