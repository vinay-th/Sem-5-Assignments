# 12. Implement a PasswordManager class that raises custom exceptions
# (WeakPasswordError, PasswordMismatchError) when user creates or
# updates a password not following given security rules.
class WeakPasswordError(Exception):
    pass

class PasswordMismatchError(Exception):
    pass

class PasswordManager:
    def __init__(self):
        self.password = None

    def create_password(self, password):
        if len(password) < 8:
            raise WeakPasswordError("Password is too weak.")
        self.password = password

    def update_password(self, old_password, new_password):
        if old_password != self.password:
            raise PasswordMismatchError("Old password does not match.")
        if len(new_password) < 8:
            raise WeakPasswordError("New password is too weak.")
        self.password = new_password

pm = PasswordManager()
try:
    pm.create_password("12345678")
    pm.update_password("12345678", "newstrongpassword")
except WeakPasswordError as wpe:
    print(wpe)
except PasswordMismatchError as pme:
    print(pme)
except Exception as e:
    print("An unexpected error occurred:", e)
