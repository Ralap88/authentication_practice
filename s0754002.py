import numpy as np
from numpy import matrix

f = open("d:/1.txt", "r")
n = f.readline()
n = int(n)
flag = 0
b= np.zeros( (5,5) )
count1 =0
count2 = 0

for i in range(0, n):
    k = f.readline()
    a = k.split()
    for j in range(0, n):
        b[i][j] = a[j]
        if i == j:
            count1 = count1 + int(a[j])
        if j+ i == n-1:
            count2 = count2 + int(a[j])
        
print("主對角線元素和,= ", count1)
print("反對角線元素和,= ", count2)