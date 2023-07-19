<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    {{-- @vite('resources/css/app.css')
     --}}
     <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        #first,
        #second,
        #third {
            border-radius: 10px;
            border-bottom-color: aqua;
            transition: all 0.5s ease-in-out;

        }

        #first:hover,
        #second:hover,
        #third:hover {
            border-radius: 10px;

            border-bottom-color: aqua;
            border-right-color: black;
            border-top-color: black;
            border-left-color: black;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;


        }

        #navbar {
            position: sticky;
            top: 0;
            z-index: 10;
        }
    </style>
    <link href="{{ asset('css/faqcss.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttoncss.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallarycss.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/navn.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/clubcard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cord.css') }}" rel="stylesheet">
    <link href="{{ asset('css/textani.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/timer.css') }}" rel="stylesheet"> --}}

    <title>HEX</title>
</head>

<body>

    <div id="navbar">
        @include('hexnav')

    </div>
    <div id="home-section">
        <div class="grid   md:grid-cols-2  gap-4 md:mt-2.5 md:justify-items-center justify-items-center">
            <div class="md:text-6xl  md:pt-36 pt-8 pl-12 "> <span class="animate-charcter"
                    style="color: aqua; font-weight:bold ">HEX </span> <br>

                <p class="md:text-3xl text-base pt-2">A grand event at Himalaya College Of Engineering of to enchance
                    communication, collaboration, and gather educational experience.</p>
                <p class="text-bold text-3xl mt-2 md:text-6xl" style="color: rgb(49, 109, 148)" id="demo"></p>

            </div>

            <div class="flex justify-center">

                <img style="border-radius: 350px;" class="md:h-3/4 md:w-auto w-3/4" src="{{ asset('images/e.jpg') }}"
                    alt="">

            </div>
        </div>
    </div>






    <div id="about-section">
        <div class="flex  m-10 md:mt-0  justify-center text-4xl font-bold mb-24">ABOUT</div>
        <div class="grid md:grid-cols-2 justify-items-center  ">
            <div>
                {{-- <div class="wrappernew"> --}}
                <div class="profile-card js-profile-card">
                    <div class="profile-card__img">
                        <img src={{ asset('images/cord.jpg') }} alt="profile card">
                    </div>

                    <div class="profile-card__cnt js-profile-cnt">
                        <div class="profile-card__name">HEX Coordinator</div>
                        <div class="profile-card__txt"> <strong>Phone: 9848611355</strong></div>
                        <div class="profile-card-loc">
                            <span class="profile-card-loc__icon">
                                <svg class="icon">
                                    <use xlink:href="#icon-location"></use>
                                </svg>
                            </span>

                            <span class="profile-card-loc__txt">
                                Kathmandu, Nepal
                            </span>
                        </div>



                        <div class="profile-card-social">
                            <a href="https://www.facebook.com/accish.oli" class="profile-card-social__item facebook"
                                target="_blank">
                                <span class="icon-font">
                                    <svg class="icon">
                                        <use xlink:href="#icon-facebook"></use>
                                    </svg>
                                </span>
                            </a>

                            <a href="https://www.instagram.com/Archi.magic/?fbclid=IwAR1sWtFo5vyhnBPo3AOJ2yesAeZePz_csHqbUkj5RAO6emfbzAYCVWGYClw"
                                class="profile-card-social__item twitter" target="_blank">
                                <span class="icon-font">
                                    <svg class="icon">
                                        <use xlink:href="#icon-twitter"></use>
                                    </svg>
                                </span>
                            </a>

                            <a href="https://www.instagram.com/Archi.magic/?fbclid=IwAR1sWtFo5vyhnBPo3AOJ2yesAeZePz_csHqbUkj5RAO6emfbzAYCVWGYClw"
                                class="profile-card-social__item instagram" target="_blank">
                                <span class="icon-font">
                                    <svg class="icon">
                                        <use xlink:href="#icon-instagram"></use>
                                    </svg>
                                </span>
                            </a>





                            <a href="https://www.instagram.com/Archi.magic/?fbclid=IwAR1sWtFo5vyhnBPo3AOJ2yesAeZePz_csHqbUkj5RAO6emfbzAYCVWGYClw"
                                class="profile-card-social__item link" target="_blank">
                                <span class="icon-font">
                                    <svg class="icon">
                                        <use xlink:href="#icon-link"></use>
                                    </svg>
                                </span>
                            </a>

                        </div>


                    </div>

                    <div class="profile-card-message js-message">
                        <form class="profile-card-form">
                            <div class="profile-card-form__container">
                                <textarea placeholder="Say something..."></textarea>
                            </div>

                            <div class="profile-card-form__bottom">
                                <button class="profile-card__button button--blue js-message-close">
                                    Send
                                </button>

                                <button class="profile-card__button button--gray js-message-close">
                                    Cancel
                                </button>
                            </div>
                        </form>

                        <div class="profile-card__overlay js-message-close"></div>
                    </div>

                </div>

            </div>

            <svg hidden="hidden">
                <defs>
                    <symbol id="icon-codepen" viewBox="0 0 32 32">
                        <title>codepen</title>
                        <path
                            d="M31.872 10.912v-0.032c0-0.064 0-0.064 0-0.096v-0.064c0-0.064 0-0.064-0.064-0.096 0 0 0-0.064-0.064-0.064 0-0.064-0.064-0.064-0.064-0.096 0 0 0-0.064-0.064-0.064 0-0.064-0.064-0.064-0.064-0.096l-0.192-0.192v-0.064l-0.064-0.064-14.592-9.696c-0.448-0.32-1.056-0.32-1.536 0l-14.528 9.696-0.32 0.32c0 0-0.064 0.064-0.064 0.096 0 0 0 0.064-0.064 0.064 0 0.064-0.064 0.064-0.064 0.096 0 0 0 0.064-0.064 0.064 0 0.064 0 0.064-0.064 0.096v0.064c0 0.064 0 0.064 0 0.096v0.064c0 0.064 0 0.096 0 0.16v9.696c0 0.064 0 0.096 0 0.16v0.064c0 0.064 0 0.064 0 0.096v0.064c0 0.064 0 0.064 0.064 0.096 0 0 0 0.064 0.064 0.064 0 0.064 0.064 0.064 0.064 0.096 0 0 0 0.064 0.064 0.064 0 0.064 0.064 0.064 0.064 0.096l0.256 0.256 0.064 0.032 14.528 9.728c0.224 0.16 0.48 0.224 0.768 0.224s0.544-0.064 0.768-0.224l14.528-9.728 0.32-0.32c0 0 0.064-0.064 0.064-0.096 0 0 0-0.064 0.064-0.064 0-0.064 0.064-0.064 0.064-0.096 0 0 0-0.064 0.064-0.064 0-0.064 0-0.064 0.064-0.096v-0.032c0-0.064 0-0.064 0-0.096v-0.064c0-0.064 0-0.096 0-0.16v-9.664c0-0.064 0-0.096 0-0.224zM17.312 4l10.688 7.136-4.768 3.168-5.92-3.936v-6.368zM14.56 4v6.368l-5.92 3.968-4.768-3.168 10.688-7.168zM2.784 13.664l3.392 2.304-3.392 2.304c0 0 0-4.608 0-4.608zM14.56 28l-10.688-7.136 4.768-3.2 5.92 3.936v6.4zM15.936 19.2l-4.832-3.232 4.832-3.232 4.832 3.232-4.832 3.232zM17.312 28v-6.432l5.92-3.936 4.8 3.168-10.72 7.2zM29.12 18.272l-3.392-2.304 3.392-2.304v4.608z">
                        </path>
                    </symbol>

                    <symbol id="icon-github" viewBox="0 0 32 32">
                        <title>github</title>
                        <path
                            d="M16.192 0.512c-8.832 0-16 7.168-16 16 0 7.072 4.576 13.056 10.944 15.168 0.8 0.16 1.088-0.352 1.088-0.768 0-0.384 0-1.632-0.032-2.976-4.448 0.96-5.376-1.888-5.376-1.888-0.736-1.856-1.792-2.336-1.792-2.336-1.44-0.992 0.096-0.96 0.096-0.96 1.6 0.128 2.464 1.664 2.464 1.664 1.44 2.432 3.744 1.728 4.672 1.344 0.128-1.024 0.544-1.728 1.024-2.144-3.552-0.448-7.296-1.824-7.296-7.936 0-1.76 0.64-3.168 1.664-4.288-0.16-0.416-0.704-2.016 0.16-4.224 0 0 1.344-0.416 4.416 1.632 1.28-0.352 2.656-0.544 4-0.544s2.72 0.192 4 0.544c3.040-2.080 4.384-1.632 4.384-1.632 0.864 2.208 0.32 3.84 0.16 4.224 1.024 1.12 1.632 2.56 1.632 4.288 0 6.144-3.744 7.488-7.296 7.904 0.576 0.512 1.088 1.472 1.088 2.976 0 2.144-0.032 3.872-0.032 4.384 0 0.416 0.288 0.928 1.088 0.768 6.368-2.112 10.944-8.128 10.944-15.168 0-8.896-7.168-16.032-16-16.032z">
                        </path>
                        <path
                            d="M6.24 23.488c-0.032 0.064-0.16 0.096-0.288 0.064-0.128-0.064-0.192-0.16-0.128-0.256 0.032-0.096 0.16-0.096 0.288-0.064 0.128 0.064 0.192 0.16 0.128 0.256v0z">
                        </path>
                        <path
                            d="M6.912 24.192c-0.064 0.064-0.224 0.032-0.32-0.064s-0.128-0.256-0.032-0.32c0.064-0.064 0.224-0.032 0.32 0.064s0.096 0.256 0.032 0.32v0z">
                        </path>
                        <path
                            d="M7.52 25.12c-0.096 0.064-0.256 0-0.352-0.128s-0.096-0.32 0-0.384c0.096-0.064 0.256 0 0.352 0.128 0.128 0.128 0.128 0.32 0 0.384v0z">
                        </path>
                        <path
                            d="M8.384 26.016c-0.096 0.096-0.288 0.064-0.416-0.064s-0.192-0.32-0.096-0.416c0.096-0.096 0.288-0.064 0.416 0.064 0.16 0.128 0.192 0.32 0.096 0.416v0z">
                        </path>
                        <path
                            d="M9.6 26.528c-0.032 0.128-0.224 0.192-0.384 0.128-0.192-0.064-0.288-0.192-0.256-0.32s0.224-0.192 0.416-0.128c0.128 0.032 0.256 0.192 0.224 0.32v0z">
                        </path>
                        <path
                            d="M10.912 26.624c0 0.128-0.16 0.256-0.352 0.256s-0.352-0.096-0.352-0.224c0-0.128 0.16-0.256 0.352-0.256 0.192-0.032 0.352 0.096 0.352 0.224v0z">
                        </path>
                        <path
                            d="M12.128 26.4c0.032 0.128-0.096 0.256-0.288 0.288s-0.352-0.032-0.384-0.16c-0.032-0.128 0.096-0.256 0.288-0.288s0.352 0.032 0.384 0.16v0z">
                        </path>
                    </symbol>

                    <symbol id="icon-location" viewBox="0 0 32 32">
                        <title>location</title>
                        <path
                            d="M16 31.68c-0.352 0-0.672-0.064-1.024-0.16-0.8-0.256-1.44-0.832-1.824-1.6l-6.784-13.632c-1.664-3.36-1.568-7.328 0.32-10.592 1.856-3.2 4.992-5.152 8.608-5.376h1.376c3.648 0.224 6.752 2.176 8.608 5.376 1.888 3.264 2.016 7.232 0.352 10.592l-6.816 13.664c-0.288 0.608-0.8 1.12-1.408 1.408-0.448 0.224-0.928 0.32-1.408 0.32zM15.392 2.368c-2.88 0.192-5.408 1.76-6.912 4.352-1.536 2.688-1.632 5.92-0.288 8.672l6.816 13.632c0.128 0.256 0.352 0.448 0.64 0.544s0.576 0.064 0.832-0.064c0.224-0.096 0.384-0.288 0.48-0.48l6.816-13.664c1.376-2.752 1.248-5.984-0.288-8.672-1.472-2.56-4-4.128-6.88-4.32h-1.216zM16 17.888c-3.264 0-5.92-2.656-5.92-5.92 0-3.232 2.656-5.888 5.92-5.888s5.92 2.656 5.92 5.92c0 3.264-2.656 5.888-5.92 5.888zM16 8.128c-2.144 0-3.872 1.728-3.872 3.872s1.728 3.872 3.872 3.872 3.872-1.728 3.872-3.872c0-2.144-1.76-3.872-3.872-3.872z">
                        </path>
                        <path
                            d="M16 32c-0.384 0-0.736-0.064-1.12-0.192-0.864-0.288-1.568-0.928-1.984-1.728l-6.784-13.664c-1.728-3.456-1.6-7.52 0.352-10.912 1.888-3.264 5.088-5.28 8.832-5.504h1.376c3.744 0.224 6.976 2.24 8.864 5.536 1.952 3.36 2.080 7.424 0.352 10.912l-6.784 13.632c-0.32 0.672-0.896 1.216-1.568 1.568-0.48 0.224-0.992 0.352-1.536 0.352zM15.36 0.64h-0.064c-3.488 0.224-6.56 2.112-8.32 5.216-1.824 3.168-1.952 7.040-0.32 10.304l6.816 13.632c0.32 0.672 0.928 1.184 1.632 1.44s1.472 0.192 2.176-0.16c0.544-0.288 1.024-0.736 1.28-1.28l6.816-13.632c1.632-3.264 1.504-7.136-0.32-10.304-1.824-3.104-4.864-5.024-8.384-5.216h-1.312zM16 29.952c-0.16 0-0.32-0.032-0.448-0.064-0.352-0.128-0.64-0.384-0.8-0.704l-6.816-13.664c-1.408-2.848-1.312-6.176 0.288-8.96 1.536-2.656 4.16-4.32 7.168-4.512h1.216c3.040 0.192 5.632 1.824 7.2 4.512 1.6 2.752 1.696 6.112 0.288 8.96l-6.848 13.632c-0.128 0.288-0.352 0.512-0.64 0.64-0.192 0.096-0.384 0.16-0.608 0.16zM15.424 2.688c-2.784 0.192-5.216 1.696-6.656 4.192-1.504 2.592-1.6 5.696-0.256 8.352l6.816 13.632c0.096 0.192 0.256 0.32 0.448 0.384s0.416 0.064 0.608-0.032c0.16-0.064 0.288-0.192 0.352-0.352l6.816-13.664c1.312-2.656 1.216-5.792-0.288-8.352-1.472-2.464-3.904-4-6.688-4.16h-1.152zM16 18.208c-3.424 0-6.24-2.784-6.24-6.24 0-3.424 2.816-6.208 6.24-6.208s6.24 2.784 6.24 6.24c0 3.424-2.816 6.208-6.24 6.208zM16 6.4c-3.072 0-5.6 2.496-5.6 5.6 0 3.072 2.528 5.6 5.6 5.6s5.6-2.496 5.6-5.6c0-3.104-2.528-5.6-5.6-5.6zM16 16.16c-2.304 0-4.16-1.888-4.16-4.16s1.888-4.16 4.16-4.16c2.304 0 4.16 1.888 4.16 4.16s-1.856 4.16-4.16 4.16zM16 8.448c-1.952 0-3.552 1.6-3.552 3.552s1.6 3.552 3.552 3.552c1.952 0 3.552-1.6 3.552-3.552s-1.6-3.552-3.552-3.552z">
                        </path>
                    </symbol>

                    <symbol id="icon-facebook" viewBox="0 0 32 32">
                        <title>facebook</title>
                        <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z">
                        </path>
                    </symbol>

                    <symbol id="icon-instagram" viewBox="0 0 32 32">
                        <title>instagram</title>
                        <path
                            d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z">
                        </path>
                        <path
                            d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z">
                        </path>
                        <path
                            d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z">
                        </path>
                    </symbol>

                    <symbol id="icon-twitter" viewBox="0 0 32 32">
                        <title>twitter</title>
                        <path
                            d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z">
                        </path>
                    </symbol>

                    <symbol id="icon-behance" viewBox="0 0 32 32">
                        <title>behance</title>
                        <path
                            d="M9.281 6.412c0.944 0 1.794 0.081 2.569 0.25 0.775 0.162 1.431 0.438 1.988 0.813 0.55 0.375 0.975 0.875 1.287 1.5 0.3 0.619 0.45 1.394 0.45 2.313 0 0.994-0.225 1.819-0.675 2.481-0.456 0.662-1.119 1.2-2.006 1.625 1.213 0.35 2.106 0.962 2.706 1.831 0.6 0.875 0.887 1.925 0.887 3.163 0 1-0.194 1.856-0.575 2.581-0.387 0.731-0.912 1.325-1.556 1.781-0.65 0.462-1.4 0.8-2.237 1.019-0.831 0.219-1.688 0.331-2.575 0.331h-9.544v-19.688h9.281zM8.719 14.363c0.769 0 1.406-0.181 1.906-0.55 0.5-0.363 0.738-0.963 0.738-1.787 0-0.456-0.081-0.838-0.244-1.131-0.169-0.294-0.387-0.525-0.669-0.688-0.275-0.169-0.588-0.281-0.956-0.344-0.356-0.069-0.731-0.1-1.113-0.1h-4.050v4.6h4.388zM8.956 22.744c0.425 0 0.831-0.038 1.213-0.125 0.387-0.087 0.731-0.219 1.019-0.419 0.287-0.194 0.531-0.45 0.706-0.788 0.175-0.331 0.256-0.756 0.256-1.275 0-1.012-0.287-1.738-0.856-2.175-0.569-0.431-1.325-0.644-2.262-0.644h-4.7v5.419h4.625z">
                        </path>
                        <path
                            d="M22.663 22.675c0.587 0.575 1.431 0.863 2.531 0.863 0.788 0 1.475-0.2 2.044-0.6s0.913-0.825 1.044-1.262h3.45c-0.556 1.719-1.394 2.938-2.544 3.675-1.131 0.738-2.519 1.113-4.125 1.113-1.125 0-2.131-0.181-3.038-0.538-0.906-0.363-1.663-0.869-2.3-1.531-0.619-0.663-1.106-1.45-1.45-2.375-0.337-0.919-0.512-1.938-0.512-3.038 0-1.069 0.175-2.063 0.525-2.981 0.356-0.925 0.844-1.719 1.494-2.387s1.413-1.2 2.313-1.588c0.894-0.387 1.881-0.581 2.975-0.581 1.206 0 2.262 0.231 3.169 0.706 0.9 0.469 1.644 1.1 2.225 1.887s0.994 1.694 1.25 2.706c0.256 1.012 0.344 2.069 0.275 3.175h-10.294c0 1.119 0.375 2.188 0.969 2.756zM27.156 15.188c-0.462-0.512-1.256-0.794-2.212-0.794-0.625 0-1.144 0.106-1.556 0.319-0.406 0.213-0.738 0.475-0.994 0.787-0.25 0.313-0.425 0.65-0.525 1.006-0.1 0.344-0.163 0.663-0.181 0.938h6.375c-0.094-1-0.438-1.738-0.906-2.256z">
                        </path>
                        <path d="M20.887 8h7.981v1.944h-7.981v-1.944z"></path>
                    </symbol>

                    <symbol id="icon-link" viewBox="0 0 32 32">
                        <title>link</title>
                        <path
                            d="M17.984 11.456c-0.704 0.704-0.704 1.856 0 2.56 2.112 2.112 2.112 5.568 0 7.68l-5.12 5.12c-2.048 2.048-5.632 2.048-7.68 0-1.024-1.024-1.6-2.4-1.6-3.84s0.576-2.816 1.6-3.84c0.704-0.704 0.704-1.856 0-2.56s-1.856-0.704-2.56 0c-1.696 1.696-2.624 3.968-2.624 6.368 0 2.432 0.928 4.672 2.656 6.4 1.696 1.696 3.968 2.656 6.4 2.656s4.672-0.928 6.4-2.656l5.12-5.12c3.52-3.52 3.52-9.248 0-12.8-0.736-0.672-1.888-0.672-2.592 0.032z">
                        </path>
                        <path
                            d="M29.344 2.656c-1.696-1.728-3.968-2.656-6.4-2.656s-4.672 0.928-6.4 2.656l-5.12 5.12c-3.52 3.52-3.52 9.248 0 12.8 0.352 0.352 0.8 0.544 1.28 0.544s0.928-0.192 1.28-0.544c0.704-0.704 0.704-1.856 0-2.56-2.112-2.112-2.112-5.568 0-7.68l5.12-5.12c2.048-2.048 5.632-2.048 7.68 0 1.024 1.024 1.6 2.4 1.6 3.84s-0.576 2.816-1.6 3.84c-0.704 0.704-0.704 1.856 0 2.56s1.856 0.704 2.56 0c1.696-1.696 2.656-3.968 2.656-6.4s-0.928-4.704-2.656-6.4z">
                        </path>
                    </symbol>
                </defs>
            </svg>

            <div class="mt-10">
                <span class="text-4xl font-bold ">About Event</span> <br>
                <p style="width: 90%" class="mt-4 text-justify ">HEX is Exibition led by undergraduate students of
                    Electronics,Architecture,Civil and Computer Engineering departments from IOE, Himalaya College of
                    Engineering. Since its inception in 2003, HEX has been providing a platform for young innovators
                    from schools and colleges all over Nepal to showcase their skills and knowledge. All its activities are guided by a
                    single compass: fostering collaboration, promoting individual development and facilitating
                    innovation.
                </p>
            </div>

        </div>

    </div>
    {{-- gallary start --}}
    <div id="gallary-section">

        <div class="flex justify-center  text-4xl mt-4 mb-5  font-bold">GALLERY</div>
        <div class="grid justify-center">
            <div class="container-slider">
                <div class="slider-wrapper md:h-[500px] md:w-[800px] w-[350px]">
                    <div class="inner-wrapper object-cover ">
                        @foreach ($img as $item)
                            <div class="slide"> <img  src="{{ asset('storage/gallaryimages/' . $item['path']) }}"
                                    alt=""></div>
                        @endforeach
                    </div>
                </div>
                <div class="button-img prev"></div>
                <div class="button-img next"></div>
            </div>
        </div>
        </div>
       





    </div>
    {{-- gallary end --}}


    {{-- event section start  --}}
    <div id="event-section">
        <div class="flex  justify-center text-4xl font-bold mt-12 mb-5 ">EVENTS</div>
        <div class="flex px-4 md:px-0  justify-center pb-4">
            <div class="ccwrapper">
                {{-- <i id="left" class="fa-solid fa-angle-left"></i> --}}
                <ul class="carousels">

                    @foreach ($data as $item)
                        <a href="{{ url('/view', ['id' => $item['id']]) }}">
                            <li class="scard">
                                <div class="img"><img src={{ asset('/storage/otherimages/' . $item['path']) }}
                                        alt="img" draggable="false"></div>
                                <h2>{{ $item['title'] }}</h2>
                                <span>{{ Illuminate\Support\Str::limit($item['description'], 250) }}</span>
                            </li>
                        </a>
                    @endforeach

                </ul>
                {{-- <i id="right" class="fa-solid fa-angle-right"></i> --}}
            </div>
        </div>
    </div>



    {{-- Event section end  --}}

    {{-- club start --}}
    <div id="club-section">
        <div class="flex justify-center  text-4xl mt-12 mb-5  font-bold">Associated Clubs</div>
        <div class="grid md:gap-2  justify-items-center md:justify-items-center md:grid-cols-3">
            @foreach ($clubdata as $i)
                {{-- <div class="pt-12"></div> --}}

                <div class="ccard mt-5">
                    <a href="{{ url('/view-club', ['id' => $i['id']]) }}">
                        <div class="ccard-info">
                            <div class="ccard-avatar">
                                <img src={{ asset($i['path']) }} alt="" srcset="">
                            </div>
                            <div class="ccard-title">{{ $i['title'] }}</div>
                            <div class="ccard-subtitle">{{ $i['subdes'] }}</div>
                        </div>
                        <ul class="ccard-social">
                            <li class="ccard-social__item">
                                <a href="{{ $i['fbpath'] }}" target="_blank">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 9h3l-.375 3H14v9h-3.89v-9H8V9h2.11V6.984c0-1.312.327-2.304.984-2.976C11.75 3.336 12.844 3 14.375 3H17v3h-1.594c-.594 0-.976.094-1.148.281-.172.188-.258.5-.258.938V9z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="ccard-social__item">
                                <a href="{{ $i['instapath'] }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    {{-- club end --}}
    <div id="faq-section">
        <div class="flex justify-center  text-4xl  font-bold mt-12 mb-5  ">FAQ</div>
        @include('faq')
    </div>



    {{-- contact start --}}
    <div id="contact-section">
        <div class="flex justify-center  text-4xl  font-bold mt-12 mb-5  ">CONTACT US</div>
        <div class="grid gap-2 mb-10  justify-items-center  pt-4 md:grid-cols-3">
            <div id="first" class="flex border-b-8 w-80 border-2 flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 pt-2  " src={{ asset('images/address.png') }} alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-black">ADDRESS</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Chyasal-9, Lalitpur</span>
            </div>
            <div id="second" class="flex border-b-8 w-80 border-2 flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 pt-2  " src={{ asset('images/phone.png') }} alt="Phone image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-black">PHONE</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">C+977984868955</span>
            </div>
            <div id="third" class="flex border-b-8 w-80   border-2 flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3  pt-2 " src={{ asset('images/email.jpg') }} alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-black">EMAIL</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">xyz@gmail.com</span>
            </div>
        </div>
        <div class="flex justify-center text-4xl mb-4 font-bold">Drop us a line</div>
        <div class="mx-auto mb-10 max-w-sm md:max-w-lg lg:max-w-xl">
            <form method="POST" action="/">
                @csrf
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="fname" id="floating_first_name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_first_name"
                            class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                            name</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="lname" id="floating_last_name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_last_name"
                            class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                            name</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="email" id="floating_email"
                        class="block  py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="subject" id="floating_subject"
                        class="block  py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subject</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <textarea type="text" name="message" id="floating_password"
                        class="block h-40   py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required> </textarea>
                    <label for="floating_password"
                        class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
                </div>
                <button>
                    <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                            <svg height="24" width="24" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <span>Send</span>
                </button>
            </form>
        </div>
    </div>

    {{-- contact end  --}}




    {{-- club section --}}

    {{-- mapstart --}}
    <div class="mt-10" id="map">
        <iframe class=" h-mapheight" width="100%" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.303387880351!2d85.33019177459632!3d27.677016526830073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c18b827885%3A0x4207ecf181978d2e!2sHimalaya%20College%20of%20Engineering!5e0!3m2!1sen!2snp!4v1688060148930!5m2!1sen!2snp"
            allowfullscreen>
        </iframe>
    </div>

    {{-- mapend --}}

    {{-- footer --}}
    <div style="background-color: #222222 " class="grid   text-center grid-cols-1 h-15 back ">
        <div>
            <p class="mt-2 text-white ">© Copyright <span class="font-bold ">HEX </span>. All Rights Reserved.</p>
            <p class="pb-2 " style="color:blue"> <a target="_blank"
                    href="https://www.linkedin.com/in/kiran-dhungana-ab93591a7/">Developer</a></p>

        </div>


    </div>

    <script src="{{ asset('js/faqjs.js') }}"></script>
    <script src="{{ asset('js/timer.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/gallary.js') }}"></script>

    <script src="{{ asset('js/hexnav.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    {{-- <script  src="{{asset('js/navn.js')}}"> </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
</body>



</html>
