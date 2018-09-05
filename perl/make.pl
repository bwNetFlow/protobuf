use Google::ProtocolBuffers;

Google::ProtocolBuffers->parsefile($ARGV[0], { generate_code => $ARGV[1], create_accessors => 1, follow_best_practice => 1 });
