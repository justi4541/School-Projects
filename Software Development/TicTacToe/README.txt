Tic Tac Toe Project
Language: HTML, CSS, and JavaScript. The server was done in PHP
Comments: Minimal
I was tasked with writing a tic-tac-toe game where a client (a person using a web browser) plays tic-tac-toe with a
web server.When the “new game” button is clicked, a new game starts, even if a game is already in progress.
• The client will always be the X player and will always go first.
• When the client clicks on a valid spot on the board, their X is shown and a message is sent to the
server indicating their spot.
• The server checks to see if that move results in a winner or a tie and sends an appropriate message
back to the client. This message is displayed by the client.
• If there is no winner or tie, then the server chooses a random spot. It also checks to see if its move
results in a winner. It sends the random spot to the client so that the client can update their board,
and it sends a message if its move resulted in a win.
• Have the client pause for about 1 second before displaying the server’s move so that the server’s
move doesn’t display too quickly.