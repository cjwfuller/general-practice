class Reverser:
    def reverse_words(self, words):
        """Reverse words, in place without Python built-ins

        Arguments:
        words - words to reverse

        Example:
        reverse_words('this is a sentence') returns 'sentence a is this'
        """
        arr = words.split(' ')
        sentence_length = len(arr)
        for idx in xrange(sentence_length / 2):
            tmp = arr[idx]
            arr[idx] = arr[sentence_length - idx - 1]
            arr[sentence_length - idx - 1] = tmp
        return ' '.join(arr)
