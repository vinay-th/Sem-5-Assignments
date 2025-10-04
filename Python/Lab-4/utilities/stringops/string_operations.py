def str_len(s):
    return len(s)

def str_upper(s):
    return s.upper()

def str_lower(s):
    return s.lower()

def str_rev(s):
    return s[::-1]

def count_vowels(s):
    vowels = "aeiouAEIOU"
    return sum(1 for ch in s if ch in vowels)