#!/usr/bin/perl

print "Enter a string: ";
my $input = <STDIN>;
chomp $input;

my $reversed = reverse $input;

if ($input eq $reversed) {
    print "This string is a palindrome!\n";
} else {
    print "This string is NOT a palindrome.\n";
}
