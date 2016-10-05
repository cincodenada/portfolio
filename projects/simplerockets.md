SimpleRockets is a game built by Andrew Garrison that's more or less a simpler,
2D Kerbal Space Program.  It has an active community, and rocket designs were sharable
via URL, but the only way to view them was to open up the URL in the app.

The URL just pointed to a rocket savefile, which was a fairly straightforward XML file
describing the parts, their positions, connections, and so on.  So in May 2014, I initially intended to
build a simple analyzer for the rockets to show the center of gravity and aid in positioning
RCS thrusters in the later stages (it's important to center the RCS thrusters around the center
of mass), but once I had done all the work necessary for that - parsing the files, building
the rocket's structure, separating out the stages of the rocket - it was an almost trivial step to
making a full-fledged online rocket viewer, skins and all.

So with the developer's permission, I included the skins in the webapp as well, turned the
analysis overlays off by default, and it functions primarily as a web-base viewer for people
to share their ships.  I also later adopted and improved on a Reddit bot that was built to
automatically link to the online viewer when a share link was posted to the SimpleRockets
subreddit.  It still sees a very small but steady stream of traffic.
