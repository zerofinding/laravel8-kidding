<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Post;
use App\Models\Work;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'UI Components',
            'slug' => 'ui-omponents',
        ]);

        Category::create([
            'name' => 'App',
            'slug' => 'app',
        ]);

        Category::create([
            'name' => 'Tech Stack',
            'slug' => 'tech-stack',
        ]);

        Category::create([
            'name' => 'App Development',
            'slug' => 'app-development',
        ]);
        
        Category::create([
            'name' => 'Hackathon',
            'slug' => 'hackathon',
        ]);
        
        Category::create([
            'name' => 'Hello',
            'slug' => 'hello',
        ]);

        Post::create([
          "title" => "Wanna see Rapi UI in action?",
          "excerpt" => "Now all the UI components on my react native expo template uses Rapi UI",
          "category_id" => 1,
          "date" => "2021-03-24",
          "slug" => "rapi-ui-in-action",
          "content" => "<p>Now all the UI components on my react native expo template uses Rapi UI, check this out https://github.com/codingki/react-native-expo-template</p>",
          "image" => null
        ]);
        Post::create([
          "title" => "My \"Sehat negeriku\" app is not working anymore",
          "excerpt" => "Remember Sehat Negeriku Redesign and Rebuild? ",
          "category_id" => 2,
          "date" => "2021-02-07",
          "slug" => "my-sehat-negeriku-app-is-not-working-anymore",
          "content" => "<p>Remember this? <a href=\"https://twitter.com/kikiding/status/1302211106958573568\" target=\"_blank\" rel=\"noopener\">https://twitter.com/kikiding/status/1302211106958573568</a> now is not working anymore because they updated the api so I can't acces it anymore. When I try to get their API endpoint again using \"Packet Tracer\" I can't access the API, I think they add more security so it can't be access outside the app.</p><p>I feel good when I open their app, because they update the app the layout, the design now is better now. I think my job is done 😆</p>",
          "image" => null
        ]);
        Post::create([
          "title" => "Rewriting my site with Next and Tailwind",
          "excerpt" => "Why I rewrite my site",
          "category_id" => 3,
          "date" => "2021-01-31",
          "slug" => "rewriting-my-site-with-next-and-tailwind",
          "content" => "<p>My last version of this site is built with Expo + Next, I got some issues with the responsive capablities. I know building website with Expo is not the best option, I just experimenting back then. I really want to try tailwindcss from a long time, because the hype of this css framework is big its making me curios of this framework.</p><p>Recently I was not busy so I decided to try tailwindcss, and it was magical. Last time I use a css framework is many years ago (I was using Bootstrap at that time). I didn't know any utilty first css framework until I try tailwind.</p><p>I use DatoCMS for the CMS of my site, combining it with Next.js is just smooth, I love seeing my lighthouse score now haha.</p><p>Last year I attended a virtual talk with Surabaya.JS, Griko Nibras was talking about dynamic social image for website, I was having trouble about this topic. I was lucky enough to attend this because I really want to know how to do this, and now I implementing it on my site. If you interested in this topic check this out: <a href=\"https://github.com/nextplate-dev/nextplate\" target=\"_blank\" rel=\"noopener\">https://github.com/nextplate-dev/nextplate</a></p>",
          "image" => null
        ]);
        Post::create([
          "title" => "React Native + Expo Starter Templates",
          "excerpt" => "I'm tired every time I create a new project from blank, so I decided to make my own starter templates, if you use React native and Expo to build apps feel free to use it!",
          "category_id" => 4,
          "date" => "2020-10-27",
          "slug" => "react-native-expo-starter-templates",
          "content" => "<p>I'm tired every time I create a new project from blank, so I decided to make my own starter templates, if you use React native and Expo to build apps feel free to use it!</p><p>Bonus Snap Midtrans payment gateway example on client side😘</p><p>Source code : <a href=\"https://https://github.com/codingki/react-native-expo-template\" target=\"_blank\" rel=\"noopener\">https://github.com/codingki/react-native-expo-template</a></p><p>Documented with a readme and I hope beginner friendly</p>",
          "image" => "https://www.datocms-assets.com/35386/1611984418-thumbnail-02.jpg"
        ]);
        Post::create([
          "title" => "First Hackathon Second Place",
          "excerpt" => "I want to share a litle experience participating on BNCC Technoscape x tiket.com",
          "category_id" => 5,
          "date" => "2020-10-17",
          "slug" => "first-hackathon-second-place",
          "content" => "<p>I want to share a litle experience participating on BNCC Technoscape x tiket.com Hackathon, this event held online.</p><p>This was a competition build an application in 48 hours, I was given a case and then given 48 hours to make the solution. There are 2 cases given:</p><p>1.Enjoy online concerts during a pandemic2. IT Security We take the first case.</p><p>I teamed up with Ocky. My communication is not very good luckily Ocky is a Communication students so I decided to bring him to the team to help me with presentation and brainstorming, btw we lived in the same house.</p><p>We have an idea, what if online ticket concert can be bought seperately(ketengan) so the audience can watch it seperately with a different rundown in one festival/online concert, because in online concert case this is possible.</p><p>So we decided to take that idea to development and going through some mentoring session until the product was done. Then on 17 Oct the winner announced, we got 2nd place!</p><p>Full read and some development process (in Indonesian) on my twitter</p><p>Source code : <a href=\"https://https://github.com/codingki/TikTeng\" target=\"_blank\" rel=\"noopener\">https://github.com/codingki/TikTeng</a></p>",
          "image" => "https://www.datocms-assets.com/35386/1611984327-nur-fikrimaradota-1.jpg"
        ]);
        Post::create([
          "title" => "Welcome to my site!",
          "excerpt" => "Welcome to my site everyone, in this site i will be posting some of my works and ill be write some posts here.",
          "category_id" => 6,
          "date" => "2020-10-07",
          "slug" => "welcome-to-my-site",
          "content" => "<p>Welcome to my site everyone, in this site i will be posting some of my works and i'll be write some posts here. Enjoy!</p>",
          "image" => null
        ]);
        Post::create([
          "title" => "Technology I used to build this site (2020/10/07)",
          "excerpt" => "My experience of building site with Expo + Next",
          "category_id" => 3,
          "date" => "2020-10-07",
          "slug" => "technology-i-used-to-build-this-site-2020-10-07",
          "content" => "<p>First of all I am a React native Enthusiast and I love Expo, so I decided to build my personal website with React native and Expo. I really want to try Next.js, and then I know Next.js can be combined with Expo.</p><p>I have been coding too much with React Native and I'm forgetting html and css haha, becasue of that I decided to build this with those technology.</p><p>My experience of building this with Expo + Next is very smooth, confused a little with the navigation but I managed to worked it out.</p>",
          "image" => null
        ]);
        
        Work::create([
          "title" => "Rapi UI",
          "slug" => "rapi-ui",
          "excerpt" => "Beautiful & clean components for your react native apps",
          "date" => "2021-03-20",
          "categories" => "React native, UI Library, Components library",
          "content" => "<p>Rapi UI is a UI components library for react native. The design is beautiful and clean, I personally use this type of design in my projects so why not I pack these components to a npm packages so everyone can use.</p>",
          "image" => "https://www.datocms-assets.com/35386/1616337549-hero.png",
          "deployment" => "Web: https://rapi-ui.kikiding.space/, Github: https://github.com/codingki/react-native-rapi-ui",
          "technologyUsed" => "React native, typescript"
        ]);
        Work::create([
          "title" => "Kawalcovid19.id Vaccine rubric",
          "slug" => "kawalcovid19-id-vaccine-rubric",
          "excerpt" => "I'm contributing to kawalcovid19.id. After I release menujuherdimmunity.id Kawal COVID-19 team invite me to collaborate on building their vaccinate rubric.",
          "date" => "2021-02-16",
          "categories" => "Web",
          "content" => "<p>I'm contributing to kawalcovid19.id. After I release menujuherdimmunity.id Kawal COVID-19 team invite me to collaborate on building their vaccinate rubric.</p><p>I design, code and connecting the APIs the vaccine rubric for kawalcovid19.id.also vaccine widget on the home page</p>",
          "image" => "https://www.datocms-assets.com/35386/1613492121-euv9t9fucamltlf.jpeg",
          "deployment" => "Web: https://kawalcovid19.id/vaksin",
          "technologyUsed" => "React, Next"
        ]);
        Work::create([
          "title" => "React Native Animated Touchable Component",
          "slug" => "react-native-animated-touchable-component",
          "excerpt" => "React Native Touchable Component with Custom Animations",
          "date" => "2021-02-09",
          "categories" => "component, npm package",
          "content" => "<p>Created a animated touchable component using @FernandoTheRojo's MotiDocumentation <a href=\"https://github.com/codingki/react-native-touchable-moti\" target=\"_blank\" rel=\"noopener\">here</a></p>",
          "image" => "https://www.datocms-assets.com/35386/1613543241-ezgif-2-92d88ce57b54.gif",
          "deployment" => "github: https://github.com/codingki/react-native-touchable-moti, example: https://github.com/codingki/react-native-touchable-moti",
          "technologyUsed" => "React Native, Moti, Expo"
        ]);
        Work::create([
          "title" => "Menuju Herd Immunity",
          "slug" => "menuju-herd-immunity",
          "excerpt" => "Calculation of how far Indonesia goes to \"Herd Immunity\"",
          "date" => "2021-02-03",
          "categories" => "Website",
          "content" => "<p>Calculation of how far Indonesia goes to \"Herd Immunity\" The calculation is taken from (total recovered people + number of people who have been vaccinated / vaccinated targets) X 100%</p>",
          "image" => "https://www.datocms-assets.com/35386/1612314433-image.png",
          "deployment" => "web: https://menujuherdimmunity.id/, github: https://github.com/codingki/menuju-herd-immunity",
          "technologyUsed" => "Next.js, React, Tailwindcss, Express"
        ]);
        Work::create([
          "title" => "React native Expo starter templates",
          "slug" => "react-native-expo-starter-templates",
          "excerpt" => "These are my starter templates or my way for building mobile app with react native and expo.",
          "date" => "2021-01-21",
          "categories" => "Starter Templates",
          "content" => "<p>These are my starter templates or my way for building mobile app with react native and expo. I'm tired everytime I create a new project from blank, so I decided to make a starter templates, feel free to use it 🥳 Bonus Snap Midtrans payment gateway😘</p>",
          "image" => "https://www.datocms-assets.com/35386/1612055706-authflow.png",
          "deployment" => "github: https://github.com/codingki/react-native-expo-template",
          "technologyUsed" => "React Native, Expo, Firebase, Supabase, Midtrans"
        ]);
        Work::create([
          "title" => "Sundareka Dashboard Redesign",
          "slug" => "sundareka-dashboard-redesign",
          "excerpt" => "Redesigning Sundareka Dashboard",
          "date" => "2021-01-15",
          "categories" => "UI & UX, Redesign",
          "content" => "<p>Before :</p><p><img src=\"https://www.datocms-assets.com/35386/1612055890-image-1.png\" alt=\"Sundareka Dashboard Before\"></p>",
          "image" => "https://www.datocms-assets.com/35386/1612055826-redesignsundareka.png",
          "deployment" => "",
          "technologyUsed" => "Figma"
        ]);
        Work::create([
          "title" => "Customer Satisfaction Index for PKB Ujung Menteng",
          "slug" => "customer-satisfaction-index-for-pkb-ujung-menteng",
          "excerpt" => "Calculate the operation time and get the Customer satisfaction index value",
          "date" => "2020-10-20",
          "categories" => "Mobile App",
          "content" => "<p>This app is a survey for the visitors of PKB Ujung Menteng to calculate the operation time and get the customer satisfaction index value.</p>",
          "image" => "https://www.datocms-assets.com/35386/1612055172-el4-zggo-u8-aaii-zt.jpg",
          "deployment" => "",
          "technologyUsed" => "React Native, Expo, Firebase"
        ]);
        Work::create([
          "title" => "TikTeng",
          "slug" => "tikteng",
          "excerpt" => "BNCC Technoscape x tiket.com Hackathon submission for Maradota Team (TikTeng)",
          "date" => "2020-10-17",
          "categories" => "Hackathon, Mobile App",
          "content" => "<p>BNCC Technoscape x tiket.com Hackathon submission for Maradota Team (TikTeng)🥈 2nd place 🥳</p><p>An online concert ticket sales platform that can be purchased sepeately (ketengan)</p>",
          "image" => "https://www.datocms-assets.com/35386/1612056042-thumbnail.png",
          "deployment" => "expo: https://expo.io/@kidingki/projects/tikteng, github: https://github.com/codingki/TikTeng",
          "technologyUsed" => "React Native, Expo"
        ]);
        Work::create([
          "title" => "Sehat Negeriku Redesign & Rebuild",
          "slug" => "sehat-negeriku-redesign-rebuild",
          "excerpt" => "Sehat Negeriku is a portal news app from Kemenkes Indonesia, This is unofficial Redesign & Rebuild project by me.",
          "date" => "2020-08-01",
          "categories" => "Redesign",
          "content" => "<p>Sehat Negeriku is a portal news app from Kemenkes Indonesia, This is unofficial Redesign &#x26; Rebuild project by me.</p>",
          "image" => "https://www.datocms-assets.com/35386/1611984631-thumbnail.jpg",
          "deployment" => "github: https://github.com/codingki/sehatnegeriku, android: https://play.google.com/store/apps/details?id=com.kikiding.sehatnegerikurebuild, expo: https://expo.io/@kidingki/projects/sehatnegeriku",
          "technologyUsed" => "React Native, Expo, Graphql"
        ]);
        Work::create([
          "title" => "Color Sense",
          "slug" => "color-sense",
          "excerpt" => "Color sense is a game that will test your color sensitivity.",
          "date" => "2020-06-10",
          "categories" => "Game",
          "content" => "<p>This game I made to learn animations on react native</p>",
          "image" => "https://www.datocms-assets.com/35386/1612054620-feature.png",
          "deployment" => "web: https://color-sense.kikiding.space/, android: https://play.google.com/store/apps/details?id=com.essence.colorsense, expo: https://expo.io/@kidingki/projects/sehatnegeriku",
          "technologyUsed" => "React native, Expo"
        ]);
        Work::create([
          "title" => "Transforming Comika.id website to a mobile app",
          "slug" => "transforming-comika-id-website-to-a-mobile-app",
          "excerpt" => "Sharpening my UI and Frontend developing skills on React Native by transforming Comika.id website to a mobile app using expo ❤️ + React Navigation 🔥.",
          "date" => "2020-05-01",
          "categories" => "Mobile App, UI & UX",
          "content" => "<p>For those who don’t know Comika.id is a platform to buy a digital download of a indonesian standup comedy shows.</p><p>I want to sharpening my UI and Frontend developing skills so I trying to transforming the website to a mobile app from scratch.This is just me exploring my creativity.</p>",
          "image" => "https://www.datocms-assets.com/35386/1612055789-comika-19.png",
          "deployment" => "Medium: https://medium.com/@kikidding/transforming-comika-id-website-to-a-mobile-app-619c20052764, Expo: https://expo.io/@kidingki/projects/comika",
          "technologyUsed" => "React native, Expo, Figma"
        ]);
        Work::create([
          "title" => "Instagram Stories Clone with React native + Expo",
          "slug" => "instagram-stories-clone-with-react-native-expo",
          "excerpt" => "After experimenting with expo-av api, Video component and react-native Animations, I found my way to clone the instagram stories.",
          "date" => "2020-01-02",
          "categories" => "Experiment, Animations",
          "content" => "<p>After experimenting with expo-av api, Video component and react-native Animations, I found my way to clone the instagram stories.</p>",
          "image" => "https://www.datocms-assets.com/35386/1612055368-capture-1.png",
          "deployment" => "expo: https://expo.io/@kidingki/projects/instagramstoryclone, medium: https://medium.com/@kikidding/instagram-stories-clone-with-react-native-expo-e68683c9faaa",
          "technologyUsed" => "React Native, Expo"
        ]);
        Work::create([
          "title" => "Enchante.id",
          "slug" => "enchante-id",
          "excerpt" => "Enchante is a Local fashion brand that provides your daily minimalist style",
          "date" => "2019-12-20",
          "categories" => "Online Store, Website",
          "content" => "<p>This goal of this project is to make an online store for this brand and intregrate with midtrans payment gateway</p>",
          "image" => "https://www.datocms-assets.com/35386/1612054996-9.jpg",
          "deployment" => "web: https://enchante.id",
          "technologyUsed" => "Wordpress, Woocommerce, Midtrans"
        ]);
        Work::create([
          "title" => "Lockdown Chat",
          "slug" => "lockdown-chat",
          "excerpt" => "Chatting with other people in your city, in your country, even with other people in the world.",
          "date" => "2019-08-20",
          "categories" => "Mobile App, Chating App",
          "content" => "<p>This app is I made when I'm bored and want to make something, and I got this idea \"How about we can chat with each other in my city or my country.</p>",
          "image" => "https://www.datocms-assets.com/35386/1612055507-lockdownchat-07.png",
          "deployment" => "android: https://play.google.com/store/apps/details?id=com.essence.lockdownchat, Expo: https://expo.io/@kidingki/projects/lockdownchat",
          "technologyUsed" => "React Native, Expo"
        ]);
    }
}
