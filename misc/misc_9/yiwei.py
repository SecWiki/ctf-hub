from string import maketrans

in_string = "abcdefghijklmnopqrstuvwxyz"
out_string = "cdefghijklmnopqrstuvwxyzab"

goal = """g fmnc wms bgblr rpylqjyrc gr zw fylb.
rfyrq ufyr amknsrcpq ypc dmp. bmgle gr gl zw fylb
gq glcddgagclr ylb rfyr'q ufw rfgq rcvr gq qm jmle.
sqgle qrpgle.kyicrpylq() gq pcamkkclbcb. lmu ynnjw ml rfc spj."""

trans_string = maketrans(in_string, out_string)

print goal.translate(trans_string)
