all: flow-messages-enriched.proto
	mkdir cpp csharp go java js objc php python ruby
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
	    ./flow-messages-enriched.proto
