<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <body class=" bg-[#181818] ">
        <main class="flex">
            <div
                class="sideBar transition-all duration-300 max-sm:ml-[-58px] ease-linear w-[60px] flex flex-col h-screen p-2 top-0 bg-[#181818] px-2 border-r border-[#7B818A] relative">
                <div class="flex flex-col justify-between flex-1 mt-6">
                    <div>
                        <a href="/Musify/Project/public/home"
                            class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-sm text-[#b8bcc0] hover:bg-[#7B818A] hover:text-[#181818]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            <span class="side hidden mx-6">Home</span>
                        </a>
                        <a href="/Musify/Project/public/musics"
                            class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-sm text-[#b8bcc0] hover:bg-[#7B818A] hover:text-[#181818]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />
                            </svg>
                            <span class="side hidden mx-6">Musics</span>
                        </a>
                        <a href="/Musify/Project/public/Artists"
                            class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-sm text-[#b8bcc0] hover:bg-[#7B818A] hover:text-[#181818]">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>

                            <span class="side hidden mx-6">Artists</span>
                        </a>
                        <a href="/Musify/Project/public/playlists"
                            class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-sm text-[#b8bcc0] hover:bg-[#7B818A] hover:text-[#181818]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                            </svg>
                            <span class="side hidden mx-6">Playlist</span>
                        </a>
                        <form action="/Musify/Project/public/user/logout" method="POST">
                            @csrf
                            <button type="submit" name="logout"
                                class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-sm text-[#b8bcc0] hover:bg-[#7B818A] hover:text-[#181818]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>
                                <span class="side hidden mx-6">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-full mt-2 h-screen overflow-auto">
                <div class="justify">
                    <div id="btnDashboard" class="p-2 text-[#b8bcc0] border-[0.5px] m-2 border-[#b8bcc0] rounded-sm hover:text-[#181818] hover:bg-[#b8bcc0] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                        </svg>
                    </div>
                    <div class="p-2 text-[#b8bcc0] border-[0.5px] m-2 border-[#b8bcc0] rounded-sm hover:text-[#181818] hover:bg-[#b8bcc0] w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                          </svg>
                          
                    </div>
                </div>
                @yield('content');
            </div>
        </main>
    </body>
    <x-messages />

</html>
<style>
    .display {
        display: grid;
        grid-gap: 5px;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }

    /* width */
    ::-webkit-scrollbar {
        width: 4px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #e0f2fe;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #474747;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #6d6d6d;
    }
</style>
<script>
    var btn = document.getElementById('btnDashboard');
    var sideBar = document.querySelectorAll('.sideBar');
    var side = document.querySelectorAll('.side');
    btn.addEventListener('click', e => {
        if (sideBar[0].classList.contains('w-[60px]')) {
            sideBar[0].classList.replace('max-sm:ml-[-58px]', 'max-sm:ml-0');
            sideBar[0].classList.replace('w-[60px]', 'w-60');
        } else {
            sideBar[0].classList.replace('w-60', 'w-[60px]');
            sideBar[0].classList.replace('max-sm:ml-0', 'max-sm:ml-[-58px]');
        }

        for (var i in side) {
            side[i].classList.toggle('hidden');
        }
    })


    //     const playButton = document.querySelectorAll('.playbtn');
    // for (var i = 0; i < playButton.length; i++) {
    //     playButton[i].addEventListener('click', function (e) {
    //         if (runButton.classList.contains('fa-play')) {
    //             runButton.classList.remove('fa-play');
    //             runButton.classList.add('fa-pause');
    //             console.log(e.target.parentElement)
    //             audio = new Audio(e.target.parentElement.attributes[1].value)
    //             audio.play()
    //         } else {
    //             runButton.classList.remove('fa-pause');
    //             runButton.classList.add('fa-play');
    //             audio.pause()
    //         }
    //     }
    //     )
    // };


    const playButton = document.querySelectorAll('.playbtn');
    let t = 0;
    var audio = '';
    for (var i = 0; i < playButton.length; i++) {
        console.log(audio)
        playButton[i].addEventListener('click', function(e) {
            if (e.target.classList.contains('fa-play')) {
                audio = new Audio(e.target.attributes[0].value)
                if (t != 0) {
                    var lastAudio = new Audio(t);
                    lastAudio.pause();
                    for (var j = 0; j < playButton.length; j++) {
                        console.log(playButton[j]);
                        if (play.classList.contains('fa-play') && play != e.target) {
                            e.target.classList.replace('fa-pause', 'fa-play');
                            lastAudio.pause();
                        }
                    }
                }
                t = e.target.attributes[0].value;
                e.target.classList.replace('fa-play', 'fa-pause')
                audio.play()
            } else {
                e.target.classList.replace('fa-pause', 'fa-play')
                audio.pause()
            }
        })
    };
</script>
