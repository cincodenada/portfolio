A project to simulate many runs of the grass-growing dynamics of Minecraft
in a given layout, and give summary statistics about them.

Built and improved over a couple days, it was inspired by some debate in
an [/r/Minecraft thread][ot] about a [minigame][iua] that [/u/Phinq][up] had invented.
Quick summary: an arena of bare dirt is built, players claim squares in the arena.
Grass is introduced, and the last person whose square is covered in grass wins.

For those unfamiliar: grass in Minecraft spreads randomly, but within certain parameters, so
some spots will be better than others in any given arena.  There was much debate and
theorizing in the thread about what spots would be best and why, but no actual data
to be found.  So I banged together my simulator, which lets you draw whatever arena
you want, and run a simulation of thousands of runs, keeping track of how often each
square was the last square covered.

My simulator was [well-received][mt] by /r/Minecraft, and I received some good feedback from
people who knew more about the grass-spreading algorithms than is reasonable, and certianly
more than I did.  I tweaked the simulation accordingly, ironed out some bugs, and now I'm
reasonably certain that it's an accurate simulation, and possibly even a useful tool for
designing arenas for Phinq's game, providing information to ensure a reasonably balanced
game.  It could also be used by players to seek out the best spots, but where's the fun
in that?


[ot]: http://www.reddit.com/r/Minecraft/comments/rmlug/invented_a_new_minigame_last_night/
[iua]: http://imgur.com/a/NJNnr
[up]: http://www.reddit.com/user/Phinq
[mt]: http://www.reddit.com/r/Minecraft/comments/rpwie/there_was_some_debate_about_the_best_spots_in/
