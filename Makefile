all: flow-messages-enriched.proto
	mkdir -p cpp csharp go java js objc php python ruby rust;
	protoc \
	    --cpp_out=cpp \
	    --csharp_out=csharp \
	    --go_out=./go --go_opt=paths=source_relative \
	    --java_out=java \
	    --js_out=js \
	    --objc_out=objc \
	    --php_out=php \
	    --python_out=python \
	    --ruby_out=ruby \
	    --rust_out=rust \
	    ./flow-messages-enriched.proto;
	cd go && go mod init github.com/bwNetFlow/protobuf/go || go mod tidy;
