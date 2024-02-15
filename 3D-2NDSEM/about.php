<div class="fullbody">
<div class="p1">
        <div class="overlay"></div>
        <h1 class="website-name">Ecode</h1>
        <p class="description">We turn your ideas into reality</p>
    </div>

    <div class="container">
        <h2>Welcome to Ecode!</h2><br>
        <p>
            At Ecode, we are driven by passion for technology and creativity. Our mission is to transform your ideas into
            reality through cutting-edge websites, interactive games, and innovative tech solutions. With a team of dedicated
            professionals, we strive to make a positive impact in the digital world.
        </p>
        <h2>What We Do</h2><br>
        <p>
            From crafting responsive websites to developing immersive games, we specialize in a wide range of technological
            ventures. Our creative approach and attention to detail set us apart, making Ecode the ideal partner for your
            digital aspirations.
        </p>
        <h2>Our Team</h2>
        <p>
            Meet the minds behind ecode – a diverse team of developers, designers, and tech enthusiasts. We
            collaborate to deliver high-quality projects and ensure that each endeavor reflects our commitment to
            excellence.
        </p>
        <div class="team">
            <p>Eugene Van Linsangan</p>
            <p>Jhon Eric Jocson</p>
            <p>Gabriel Manialong</p>
        </div>
    </div>

    <footer>
        &copy; 2024 Ecode. All rights reserved.
    </footer>
</div>


<style>
     .p1 {
            position: relative;
            background-image: url("prod1.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 700px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));
            z-index: 1;
        }

        .website-name {
            font-size: 5em;
            margin-bottom: 10px;
            color: white;
            z-index: 2;
        }

        .description {
            font-size: 1.2em;
            margin-top: 10px;
            z-index: 1;
            color: wheat;
        }

        .container {
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            display: block;
        }

        h2 {
            color: #333;
        }

        .ourteam {
            margin-top: 30px;
        }

        p {
            margin: 10px 0;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }.fullbody{
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #555;
            width: 100%;
            height: 100%;
        }.team{
            width: 100%;
            padding: 30px;
            text-align: center;
            margin: 40px;
            display: inline;
        }
        </style>