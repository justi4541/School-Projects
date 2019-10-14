#TOC Project #1

states = {0, 1, 2, 3}; #Q states
alphabet = {'a', 'b', 'c'};#Alphabet of our language

path = dict(); #inialize dictionary
#Q0
path[(0, 'a')] = 1;
path[(0, 'b')] = 2;
path[(0, 'c')] = 0;

#Q1
path[(1, 'a')] = 1;
path[(1, 'b')] = 1;
path[(1, 'c')] = 3;

#Q2
path[(2, 'a')] = 1;
path[(2, 'b')] = 3;
path[(2, 'c')] = 1;

#Q3
path[(3, 'a')] = 1;
path[(3, 'b')] = 3;
path[(3, 'c')] = 3;

start_state = 0; #start state
accept_states = {2, 3}; #accept state
current_state = 0;


#start = DFA(states, alphabet, path, start_state, accept_states); #start

inputs = list('aba'); #DFA inputs

def accepts(path,current_state,accept_states,inputs):
    current_state = 0;
    for c in inputs: #c stands for the character in the states
        current_state = path[(current_state,c)]
    return current_state in accept_states

def main():
    DFA_File = input('Enter a file name:  ')#reads and splits lines
    lines = [line.strip() for line in open(DFA_File)]
    test_file = [test.strip() for test in open('test_' + DFA_File)]
    alphabet = lines[0].split()
    pathing = dict()
    print(lines)
    for i  in lines[1:-3]: #sorts the dictionary
        transition = i.split()
        state = transition[0]
        pathing[state] = transition[1:len(transition)]
    for j in range(len(test_file)):
        string = test_file[j] #example of a language to be tested
        current_state = lines[-2] #initial state
        next_move = current_state + ""
        for moves in range(len(string)):
            move = string[moves] # gives the next symbol to move
            move_index = alphabet.index(move) # the index of the move of the current state
            current_state = pathing[current_state][move_index]
        
            next_move += " " + current_state
        accepting_states = lines[-1]
        if current_state in accepting_states: # if it ends in an accepting state
                next_move += " -- Accept"
        else:                                 # if it isn't an acceptign state
                next_move += " -- No Good"
        print(string + ": " + next_move)

main()
