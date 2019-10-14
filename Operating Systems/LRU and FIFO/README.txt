LRU(least recently used) and FIFO(First-In, First-Out)	 
Language: Java
Audience: Myself and My Peers

I was tasked with having new items randomly appearing and being stored in the cache according to
either the FIFO or the LRU policy. 

• Allow users of the program to easily specify the following (either by input statements or reading
from a file):
– cache size
– total number of different item values
– total number of items that will be added to the cache
• Write a updateCacheFIFO() function/method that updates the cache according to the FIFO rule.
• Write a updateCacheLRU() function/method that updates the cache according to the LRU rule.
• Keep track of the percentage of hits and misses.
• Tie all of this together to run a simulation. Your program should display each new item as it
appears, display the state of the cache after that item’s appearance, and it should display at the end
(or with every new item if you like), the percentage of hits and misses
