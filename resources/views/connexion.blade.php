<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
    <title>Connexion</title>
</head>
<body class="image-fond-form bg-cover bg-no-repeat h-full w-full bg-fixed">
    <div class="flex flex-col justify-center items-center h-[100vh] ">
        <div class="w-[462px] h-[679px] bg-white top-[76px] left-1/2 translate-x-(-462/2) border-solid border-[5px] border-[#D9D9D9] rounded-30 shadow-lg hover:shadow-xl">
            <img src="{{ asset('images/Logo AllinOne.png') }}" alt="" class=" w-[204px] h-[89px] relative top-10 left-[120px]">
            <p class="relative top-[60px] font-sans not-italic font-bold text-[25px] leading-[30px] text-center text-[#BAB8B8]">Se connecter sur All in One </p>
            <form action="{{route('login') }}" method="post">
                @csrf
                <div class="relative top-24 left-10 flex flex-col gap-3 ">
                    <label class="font-sans not-italic font-semibold text-[20px] leading-[18px] text-[#A49D9D]" for="email">Adresse e-mail</label>
                    <input class="w-[360px] h-[55px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="email" name="email" id="">
                </div>
                <div class="relative top-[120px] left-10 flex flex-col gap-3 ">
                    <label class="font-sans not-italic font-semibold text-[20px] leading-[18px] text-[#A49D9D]" for="password">Mot de passe</label>
                    <input class="w-[360px] h-[55px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="password" name="password" id="password">
                    <label class="relative bottom-[50px] left-[320px]" for=""><i class="fas fa-eye-slash" id="togglePassword"></i></label>
                </div>
                <a href="#" class="relative top-[130px] left-10 font-sans not-italic font-semibold text-[20px] leading-[24px] text-[#2F80ED]">Mot de passe oublié?</a>
                <div>
                    <button class="relative top-[170px] left-[100px] px-7 py-1 font-sans not-italic font-extrabold text-[25px] leading-[36px] text-white border-solid border-2 bg-[#FF9106] rounded-40" type="submit">Se connecter</button>
                </div>
            </form>
            <div class="relative top-[210px] font-sans not-italic font-bold text-[18px] leading-[22px] flex justify-center items-center">
                <p class="text-[#BAB8B8]">Vous n'avez pas de compte?</p>
                <a class="text-[#2F80ED]" href="{{ route('status') }}">S'inscrire</a>
            </div>
        </div>
    </div>
</body>
</html>
