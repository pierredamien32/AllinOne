<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Status</title>
</head>
<body class="image-fond-form bg-cover bg-no-repeat h-full w-full bg-fixed">
    <div class="flex flex-col justify-center items-center h-[100vh] ">
        <div class="w-[462px] h-[679px] bg-white top-[76px] left-1/2 translate-x-(-462/2) border-solid border-[5px] border-[#D9D9D9] rounded-30 shadow-lg hover:shadow-xl">
            <img src="{{ asset('images/Logo AllinOne.png') }}" alt="" class=" w-[204px] h-[89px] relative top-16 left-28">
            <p class="relative top-36 font-sans not-italic font-semibold text-[30px] leading-[42px] text-center">Quel est votre status ?</p>
            <div class="flex justify-center items-center mt-[50%] gap-20">
                <div>
                    <a href="{{ url('/formulaireClient') }}">
                        <div class=" w-[127px] h-[120px] left-[525px] top-[405px] bg-white border-solid border-[5px] border-[#FF8F01] rounded-20">
                            <img src="{{ asset('images/status/Rectangle 5.png') }}" class="relative left-4 top-4" alt=""/>
                        </div>
                    </a>
                    <p class="w-[73px] h-[30px] relative left-[25px] font-sans not-italic font-bold text-[25px] leading-[30px]">Client</p>
                </div>
                <div >
                    <a href="#">
                        <div class=" w-[127px] h-[120px] left-[706px] top-[405px] bg-white border-solid border-[5px] border-[#FF8F01] rounded-20">
                            <img src="{{ asset('images/status/Rectangle 6.png') }}" class="relative left-4 top-4" alt=""/>
                        </div>
                    </a>
                    <p class=" w-[127px] h-[30px] left-[706px] top-[546px] font-sans not-italic font-bold text-[25px] leading-[30px]">Entreprise</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>