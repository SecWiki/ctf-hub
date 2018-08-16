import base64


def encode(message):
    s = ""
    for i in message:
        x = ord(i) ^ 32
        x = x + 16
        s += chr(x)
    return base64.b64encode(s)


correct = "VlxRV2t5j3xZW1WPgGlkWF9ebQ=="
flag = ''
print("Input flag:")
flag = raw_input()
if encode(flag) == correct:
    print "correct"
else:
    print "wrong"
