<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
    <title>Compte Entreprise</title>
</head>
<body class="image-fond-form bg-cover bg-no-repeat h-full w-full bg-fixed">
    <div class="flex flex-col justify-center items-center h-[100vh] ">
        <div class="w-[462px] h-[1800px] py-48 bg-white  left-1/2 translate-x-(-462/2) border-solid border-[5px] border-[#D9D9D9] rounded-30 shadow-lg hover:shadow-xl">
            <img src="{{ asset('images/Logo AllinOne.png') }}" alt="" class=" w-[204px] h-[89px] relative bottom-7 left-[120px]">
            <p class="relative bottom-[20px] font-sans not-italic font-bold text-[25px] leading-[30px] text-center text-[#BAB8B8]">Créer un compte</p>
            <div class="text-center relative top-4">
                <button class="w-[176px] h-[43px] bg-white border-solid border border-[#BAB8B8] rounded-5 font-sans not-italic font-normal text-[20px] leading-[24px]" id="mon-btn-particulier">Particulier</button>
                <button class="w-[176px] h-[43px] bg-white border-solid border border-[#BAB8B8] rounded-5 font-sans not-italic font-normal text-[20px] leading-[24px]" id="mon-btn-organisme" >Organisme</button>
            </div>
            <form action="" method="post" id="particulier">
                <div class="flex items-center gap-5">
                    <div class="relative top-12 left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="nom">Nom <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="nom" id="">
                    </div>
                    <div class="relative top-12 left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="prenom">Prénom <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[213px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="prenom" id="">
                    </div>
                </div>
                <div class="relative top-16 left-10 flex flex-col gap-3 ">
                    <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="email">E-mail <span class="text-[#FF9106]">*</span></label>
                    <input class="w-[380px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="email" name="email" id="">
                </div>
                <div class="relative top-20 left-10 flex flex-col gap-2 ">
                    <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="contact">IFU <span class="text-[#FF9106]">*</span></label>
                    <input class="w-[380px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="number" name="contact" id="">
                </div>
                <div class="flex items-center gap-5">
                    <div class="relative top-[90px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="nom">Pays <span class="text-[#FF9106]">*</span></label>
                        <!-- <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="nom" id=""> -->
                        <select class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 ">
                            <option value="option1"></option>
                            <option value="option2">Bénin</option>
                            <option value="option3">Togo</option>
                            <option value="option3">Niger</option>
                        </select>
                    </div>
                    <div class="relative top-[90px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="prenom">Adresse <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[213px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="prenom" id="">
                    </div>
                </div>
                <div class="flex items-center gap-16">
                    <div class="relative top-[110px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="contact1">Conctat n°1 <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="number" name="contact1" id="">
                    </div>
                    <div class="relative top-[110px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="contact2">Conctat n°2 </label>
                        <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10" type="number" name="contact2" id="">
                    </div>
                </div>
                <div class="flex items-center gap-12">
                    <div class="relative top-32 left-10 flex flex-col ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="password">Mot de passe <span class="text-[#FF9106]">*</span></label>
                        <div class="flex">
                            <input class="w-[164px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="password" name="password" id="password">
                            <label class="relative right-8 top-1" for=""><i class="fas fa-eye-slash" id="togglePassword"></i></label>
                        </div>
                    </div>
                    <div class="relative top-32 flex flex-col">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="password">Confirmer mot de passe <span class="text-[#FF9106]">*</span></label>
                        <div class="flex ">
                            <input class="w-[164px] h-[34px] relative left-6 border-solid border-2 border-[#BAB8B8] rounded-10 " type="password" name="confir_password" id="password">
                            <label class="relative  top-1" for=""><i class="fas fa-eye-slash" id="togglePassword"></i></label>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 relative top-36 left-10">
                    <input class="w-[14px] h-[16px] bg-white border-solid border-2 border-[#BAB8B8]" type="checkbox" name="" value="true" id="">
                    <p class="font-sans not-italic font-semibold text-[15px] leading-[18px] text-[#A49D9D] w-[265px]">
                        En continuant, vous acceptez les 
                        <span class="text-[#2F80ED]">Conditions d’utilisation de All in One</span> 
                    </p>
                </div>
                <div class="relative top-5">
                    <button class="relative top-[140px] left-[130px] px-8 py-2 font-sans not-italic font-extrabold text-[20px] leading-[24px] text-white border-solid border-2 bg-[#FF9106] rounded-40" type="submit">S'inscrire</button>
                </div>
            </form>
            <form action="" method="post" class="hidden" id="organisme">
                <div class="flex items-center gap-5">
                    <div class="relative top-12 left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="nom">Sigle <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="nom" id="">
                    </div>
                    <div class="relative top-12 left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="prenom">Dénomination sociale <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[213px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="prenom" id="">
                    </div>
                </div>
                <div class="relative top-16 left-10 flex flex-col gap-3 ">
                    <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="email">E-mail <span class="text-[#FF9106]">*</span></label>
                    <input class="w-[380px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="email" name="email" id="">
                </div>
                <div class="relative top-20 left-10 flex flex-col gap-2 ">
                    <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="contact">IFU <span class="text-[#FF9106]">*</span></label>
                    <input class="w-[380px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="number" name="contact" id="">
                </div>
                <div class="flex items-center gap-5">
                    <div class="relative top-[90px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="nom">Pays <span class="text-[#FF9106]">*</span></label>
                        <!-- <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="nom" id=""> -->
                        <select class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 ">
                            <option value="option1"></option>
                            <option value="option2">Bénin</option>
                            <option value="option3">Togo</option>
                            <option value="option3">Niger</option>
                        </select>
                    </div>
                    <div class="relative top-[90px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="prenom">Adresse <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[213px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="text" name="prenom" id="">
                    </div>
                </div>
                <div class="flex items-center gap-16">
                    <div class="relative top-[110px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="contact1">Conctat n°1 <span class="text-[#FF9106]">*</span></label>
                        <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="number" name="contact1" id="">
                    </div>
                    <div class="relative top-[110px] left-10 flex flex-col gap-3 ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="contact2">Conctat n°2 </label>
                        <input class="w-[146px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10" type="number" name="contact2" id="">
                    </div>
                </div>
                <div class="flex items-center gap-12">
                    <div class="relative top-32 left-10 flex flex-col ">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="password">Mot de passe <span class="text-[#FF9106]">*</span></label>
                        <div class="flex">
                            <input class="w-[164px] h-[34px] border-solid border-2 border-[#BAB8B8] rounded-10 " type="password" name="password" id="password">
                            <label class="relative right-8 top-1" for=""><i class="fas fa-eye-slash" id="togglePassword"></i></label>
                        </div>
                    </div>
                    <div class="relative top-32 flex flex-col">
                        <label class="font-sans not-italic font-bold text-[17px] leading-[21px] text-[#A49D9D]" for="password">Confirmer mot de passe <span class="text-[#FF9106]">*</span></label>
                        <div class="flex ">
                            <input class="w-[164px] h-[34px] relative left-6 border-solid border-2 border-[#BAB8B8] rounded-10 " type="password" name="confir_password" id="password">
                            <label class="relative  top-1" for=""><i class="fas fa-eye-slash" id="togglePassword"></i></label>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 relative top-36 left-10">
                    <input class="w-[14px] h-[16px] bg-white border-solid border-2 border-[#BAB8B8]" type="checkbox" name="" value="true" id="">
                    <p class="font-sans not-italic font-semibold text-[15px] leading-[18px] text-[#A49D9D] w-[265px]">
                        En continuant, vous acceptez les 
                        <span class="text-[#2F80ED]">Conditions d’utilisation de All in One</span> 
                    </p>
                </div>
                <div class="relative top-5">
                    <button class="relative top-[140px] left-[130px] px-8 py-2 font-sans not-italic font-extrabold text-[20px] leading-[24px] text-white border-solid border-2 bg-[#FF9106] rounded-40" type="submit">S'inscrire</button>
                </div>
            </form>
            <div class="relative top-[170px] font-sans not-italic font-bold text-[18px] leading-[22px] flex justify-center items-center">
                <p class="text-[#BAB8B8]">Vous disposez déjà d'un compte?</p>
                <a class="text-[#2F80ED]" href="{{ url('/connexion') }}">Se connecter</a>
            </div>
        </div>
    </div>
</body>
</html>