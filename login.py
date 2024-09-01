import login

def login():
    username = input("Enter your username: ")
    password = input("Enter your password: ")

    # Check if the username and password are correct
    if username == "admin" and password == "password":
        print("Login successful!")
    else:
        print("Invalid username or password.")

# Call the login function
login()
def login():
    username = input("Enter your username: ")
    password = input("Enter your password: ")

    # Check if the username and password are correct
    if username == "admin" and password == "password":
        print("Login successful!")
        # Add code to redirect to index.php
        # You can use the following line to redirect:
        # print('<meta http-equiv="refresh" content="0; url=index.php" />')
    else:
        print("Invalid username or password.")

# Call the login function
login()

import login.php