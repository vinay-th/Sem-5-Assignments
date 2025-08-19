# 15. Write a function to accept a sentence and return a dictionary containing each word and its frequency

def getWordDict(str1):
    sent = str1.split()

    word_dict = {}
    for word in sent:
        word = word.strip(".,!?;:\"'()[]{}")
        if word in word_dict:
            word_dict[word] += 1
        else:
            word_dict[word] = 1
    
    return word_dict

print(getWordDict("This is a test. This test is simple."))
