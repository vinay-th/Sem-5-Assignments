# 15. Create a program that uses the with statement to encrypt and decrypt a text file
# using a simple cipher. Handle errors if the file is missing or unreadable.

def encrypt_decrypt_file(input_file, output_file, key):
    try:
        with open(input_file, 'r') as infile:
            data = infile.read()

        transformed_data = ''.join(chr(ord(char) ^ key) for char in data)

        with open(output_file, 'w') as outfile:
            outfile.write(transformed_data)
    except FileNotFoundError:
        print(f"Error: {input_file} not found.")
    except Exception as e:
        print(f"Error: {e}")

encrypt_decrypt_file('q1.py', 'encrypted.txt', 123)