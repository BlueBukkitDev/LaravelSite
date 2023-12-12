<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-family: 'Share Tech', sans-serif;
                font-size: 68px;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
                width: 100vw;
                height: 100vh;
                text-shadow: 8px 8px 10px #0000008c;
                background-color: #343a40;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%239C92AC' fill-opacity='0.25' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"), linear-gradient(to right top, #343a40, #2b2c31, #211f22, #151314, #000000);
                overflow: hidden;
            }
            .content {
                width: 65vw; /* Adjust based on your desired width */
                height: 98vh; /* Adjust based on your desired height */
                overflow-y: auto; /* Enable vertical scrollbar if content overflows */
                padding: 30px;
                scrollbar-width: thin; /* Set a thin scrollbar (Firefox) */
                scrollbar-color: transparent transparent; /* Set scrollbar color to transparent (Firefox) */
            }

            /* For WebKit (Chrome, Safari) */
            .content::-webkit-scrollbar {
                width: 8px; /* Set a thin scrollbar */
            }

            .content::-webkit-scrollbar-thumb {
                background-color: transparent; /* Set thumb color to transparent */
            }
        </style>
    </head>
    <body>
    <div style="background-color: #404040" class="content">
        <p>All kinds of content could go inside this div. This is a basic paragraph made up of all kinds of generic lorem ipsum content, like what you just read and continue to read. This paragraph needs to be long enough to properly display what is going on in this div.
            </br>
            </br>
            </br>
            All the way down here, a new paragraph, within the same tags. </p>
    </div>
    </body>
</html>
