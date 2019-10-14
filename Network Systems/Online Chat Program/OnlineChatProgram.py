from tkinter import *
import socket
from threading import Thread
from tkinter.scrolledtext import ScrolledText

sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)

def Insert(t):
    textbox.config(state=NORMAL)
    textbox.insert(END, t)
    textbox.config(state=DISABLED)
    
def Connection():
    sock.bind(('', int(listeningEntry.get())))
    t = "Listening to port" + listeningEntry.get() + "...\n"
    Insert(t)
    thread.start()
    
def Receiver():
    message, Response = sock.recvfrom(int(destinationEntry.get()))
    M = message.decode('utf-8')
    Insert(M)
    
def Post():
    t = nameEntry.get() + ": "+Incoming.get()+"\n"
    Insert(t)
    sock.sendto(t.encode('utf-8'),(str(IPEntry.get()),int(destinationEntry.get())))
    
def T():
    while True:
        Receiver()
thread = Thread(target = T)
    
root = Tk()
Incoming = Entry(font=('Verdana', 16), width=80)
Incoming.bind('<Return>', lambda dummy=0:Post())

textbox = ScrolledText(font=('Verdana', 16), height=6, width=40)
textbox.config(state=DISABLED)

listeningPort = Label(text='Listening Port', font=('Verdana', 16))
listeningEntry = Entry(font=('Verdana', 16),width = 20)

destinationLabel = Label(text='Destination Port',font=('Verdana', 16))
destinationEntry = Entry(font=('Verdana', 16),width = 20)

IPLabel = Label(text='Destination IP',font=('Verdana', 16))
IPEntry = Entry(font=('Verdana', 16),width = 20)

nameLabel = Label(text='Name',font=('Verdana', 16))
nameEntry = Entry(font=('Verdana', 16),width = 20)

Connectbutton = Button(text='Connect!', font=('Verdana', 16),command=Connection)

Incoming.grid(row=0, column=0, columnspan=7)

textbox.grid(row=1,column=0,columnspan=2, rowspan=7)

listeningPort.grid(row=1, column=3)
listeningEntry.grid(row=1, column=4)

destinationLabel.grid(row=3, column=3)
destinationEntry.grid(row=3, column=4)

IPLabel.grid(row=5,column=3)
IPEntry.grid(row=5,column=4)

nameLabel.grid(row=7,column=3)
nameEntry.grid(row=7,column=4)

Connectbutton.grid(row=9,column=3)
root
mainloop()

