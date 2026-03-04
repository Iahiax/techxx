class User:
    def __init__(self, username, email):
        self.username = username
        self.email = email
        self.created_at = '2026-03-04 01:50:04'

    def __str__(self):
        return f'User({self.username}, {self.email}, {self.created_at})' 
