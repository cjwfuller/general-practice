class Inverter:
    def invert_letters(self, text):
        """Invert the order of letters in the words of a string

        Example: "hello world" -> "olleh dlrow"

        """
        text = text.split(' ')
        for idx, word in enumerate(text):
            text[idx] = word[::-1]
        return ' '.join(text)