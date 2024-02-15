{{-- 
|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:
--}}

<style> 
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-400-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-400-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-400-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-400-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-400-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-400-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-400-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-700-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap;
  src: url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-700-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-700-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-700-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-700-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-700-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-700-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}

html {
    font-size: 100%; }

/* From the :root element you can easily change the colors of the design, its size and so on. */
:root {

  --color-primary: #ff5733;
  --color-secondary: #ffb133;
  --color-tertiary: #ffd3a6;
  --color-quaternary: #92c8ff;
  --scale-factor: 1.4;

  /* You can change the font family in the whole design here. (You need to add the font family to the codes.) */
  --font-family: 'Roboto', sans-serif;

  /* You can change the font size here, is proportional to all texts. */
  --font-size: 16px;

  /* You can change the frame thickness and color of the picture by typing the number of pixels and the color code. */
  --image-border-color: #1f232e;
  --image-border-px: 3px;

  /* You can change the width and size of the picture by typing the number of pixels. */
  --image-width: 140px;
  --image-height: 140px;

  /* You can change the colors of the title and description section by typing the color codes. */
  --title-color: #959595;
  --description-color: #959595;

  /* You can change the colors of social media icons by changing the color code. */
  --svg-color: #959595;

  /* You can change the background, text color and active color of the menu by changing the color codes. */
  --menu-background-color: #1f232e;
  --menu-text-color: #959595;
  --menu-active-text-color: #8ecae6;

  /* You can change the button's background, text color and active color by changing the color codes. */
  --button-background-color: #d3d1d1;
  --button-text-color: #959595;
  --button-text-hover-color: #8ecae6;

  /* You can change the background, text color and active color of the text field by changing the color codes. */
  --textarea-background-color: #1f232e;
  --textarea-text-color: #959595;
  --textarea-link-text-color: #8ecae6;

  /* You can change the background, text color and active color of the footer area by changing the color codes. */
  --footer-background-color: #1f232e;
  --footer-text-color: #959595;
  --footer-link-text-color: #8ecae6;
}
.column {
	background: rgba(255, 255, 255, 0.07);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(5.1px);
  -webkit-backdrop-filter: blur(5.1px);
	padding: 36px;
	border-radius: 40px;
  margin-bottom: 20px;
  padding-top: 80px;
}
.background-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
    z-index: -1;
}
.parallax-background {
    z-index: -1;
    min-height: 100vh;
    overflow: hidden;
    position:absolute;
    width: 100%;
    filter: blur(40px);
}

[class^="object"]{
    position: absolute;
    opacity: .7;
}

.object1 {
    background: var(--color-primary);
    height: calc(60px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(80px * var(--scale-factor)); /* Adjusted size based on scale factor */
    border-radius: 40% 50% 30% 40%;
    left: 75%;
    top: 50%;
    animation: transform 18s ease-in-out infinite both alternate, movement_one 12s ease-in-out infinite both;
}

.object2 {
    background: var(--color-secondary);
    height: calc(150px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(200px * var(--scale-factor)); /* Adjusted size based on scale factor */
    left: 10px;
    top: 100px;
    transform: rotate(-180deg);
    animation: transform 8s ease-in-out infinite both alternate, movement_two 20s ease-in-out infinite both;
}

.object3 {
    background: var(--color-tertiary);
    height: calc(150px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(150px * var(--scale-factor)); /* Adjusted size based on scale factor */
    left: 600px;
    top: 300px;
    transform: rotate(-180deg);
    animation: transform 10s ease-in-out infinite both alternate, movement_two 10s ease-in-out infinite both;
}

.object4 {
    background: var(--color-quaternary);
    height: calc(150px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(150px * var(--scale-factor)); /* Adjusted size based on scale factor */
    left: 800px;
    top: 80px;
    transform: rotate(-180deg);
    animation: transform 7s ease-in-out infinite both alternate, movement_two 23s ease-in-out infinite both;
}

.object5 {
    background: var(--color-tertiary);
    height: calc(100px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(100px * var(--scale-factor)); /* Adjusted size based on scale factor */
    left: 500px;
    top: 120px;
    transform: rotate(-180deg);
    animation: transform 17s ease-in-out infinite both alternate, movement_two 12s ease-in-out infinite both;
}

.object6 {
    background: var(--color-secondary);
    height: calc(100px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(80px * var(--scale-factor)); /* Adjusted size based on scale factor */
    left: 480px;
    top: 350px;
    transform: rotate(-180deg);
    animation: transform 12s ease-in-out infinite both alternate, movement_two 18s ease-in-out infinite both;
}

.object7 {
    background: var(--color-primary);
    height: calc(70px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(100px * var(--scale-factor)); /* Adjusted size based on scale factor */
    left: 160px;
    top: 400px;
    transform: rotate(-180deg);
    animation: transform 5s ease-in-out infinite both alternate, movement_two 7s ease-in-out infinite both;
}

.object8 {
    background: var(--color-secondary);
    height: calc(70px * var(--scale-factor)); /* Adjusted size based on scale factor */
    width: calc(100px * var(--scale-factor)); /* Adjusted size based on scale factor */
    left: 400px;
    top: 400px;
    transform: rotate(-180deg);
    animation: transform 5s ease-in-out infinite both alternate, movement_two 12s ease-in-out infinite both;
}

@keyframes transform {
    0%, 100% { border-radius: 33% 67% 70% 30% / 30% 40% 70% 70%; } 
    20% { border-radius: 37% 63% 51% 49% / 37% 35% 35% 63%; } 
    40% { border-radius: 36% 64% 64% 36% / 64% 48% 52% 26%; } 
    60% { border-radius: 37% 63% 51% 49% / 30% 30% 70% 73%; } 
    80% { border-radius: 40% 60% 42% 58% / 51% 51% 49% 59%; } 
}

@keyframes movement_one {
    0%, 100% { transform: none; }
    50% { transform: translate(100%, 50%) rotateY(10deg) scale(1); }
}

@keyframes movement_two {
    0%, 500% { transform: none; }
    50% { transform: translate(200%, 200%) rotate(-200deg) scale(1.3);}
}
</style>