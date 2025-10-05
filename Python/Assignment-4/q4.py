# 4. Create a DatabaseConnection class where the constructor simulates
# connecting to a database and the destructor automatically closes the connection
# and logs the closing time in a file.
class DatabaseConnection:
    def __init__(self, db_name):
        self.db_name = db_name
        self.connect()

    def connect(self):
        print(f"Connecting to database '{self.db_name}'...")
        # Simulate connection establishment
        self.connection = True
        print("Connection established.")

    def close(self):
        if self.connection:
            print(f"Closing connection to database '{self.db_name}'...")
            self.connection = False
            print("Connection closed.")
            self.log_closing_time()

    def log_closing_time(self):
        from datetime import datetime
        with open("db_connection_log.txt", "a") as log_file:
            log_file.write(f"Database '{self.db_name}' connection closed at {datetime.now()}\n")

    def __del__(self):
        self.close()    

db = DatabaseConnection("TestDB")
del db 