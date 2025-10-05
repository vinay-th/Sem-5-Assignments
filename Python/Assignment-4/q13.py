# 13. Write a FileMerger utility that merges multiple files into one. Use try… finally to ensure that all opened files close correctly even if an error occurs mid-process.

def merge_files(file_list, output):
    input_files = []
    try:
        for file in file_list:
            f = open(file, "r")
            input_files.append(f)
        
        with open(output, "a") as outfile:
            for f in input_files:
                outfile.write(f.read() + '\n\n')

        print("FIles merged successfully")
    except FileNotFoundError as e:
        print(e)

file_list = ["q1.py", "q2.py", "q3.py"]
merge_files(file_list, "output.txt")