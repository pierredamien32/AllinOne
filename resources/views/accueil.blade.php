<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
  <title>AllinOne</title>
</head>
<body>
    <!-- entete de la page d'accueil -->
    <header class="">
      <nav class="flex justify-between items-center mt-4 mx-8">
        <div class="flex justify-center items-center gap-12">
          <div class="">
            <img src="{{ asset('images/Logo AllinOne.png') }}" alt="" class="w-[165px] h-[91px]">
          </div>
          <div class="">
            <form action="">
              <input class="w-[260px] h-[49px] rounded-32 bg-[#D9D9D9] border-[#D9D9D9] font-sans not-italic font-bold text-base text-center text-[#777777]" type="search" name="search" id="" placeholder="Rechercher un évènement">
            </form>
          </div>
        </div>
        <div class="flex justify-center items-center gap-12">
          <div>
            <a href="#" class="font-sans not-italic font-bold text-base text-[#1D81CC] w-[199px] h-[24px]">Créer un évènement</a>
          </div>
          <div>
            <a href="{{ url('/connexion') }}" class="w-[141px] h-[34px] rounded-[30px] bg-[#1D81CC] hover:bg-blue-400 text-white font-sans not-italic font-bold text-base py-2 px-4">Connexion</a>
          </div>
          <div>
            <a href="{{ url('/status') }}" class="w-[141px] h-[34px] rounded-30 bg-[#1D81CC] hover:bg-blue-400 text-white font-sans not-italic font-bold text-base py-2 px-4">S'inscrire</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- la fin de l'entete de la page d'accueil  -->

    <!-- entete du main -->
    <main class="bg-[#D9D9D9] pb-64">
      <!-- première section -->
      <section id="accueil" class="" >
        <div class="mon-image-en-fond bg-cover bg-no-repeat rounded-32 h-[550px] w-full">
          <div class="pt-40 pl-14 w-[780px] h-[153px] font-sans not-italic font-black text-[45px] leading-[54px] text-white ">
            Un outil tout-en-un pour la gestion d’évènement réussis
          </div>
          <div class="mt-[200px] ml-14">
            <a href="#" class="w-[403px] h-[84px] bg-white rounded-40 font-sans py-6 px-10 not-italic text-[24px] font-extrabold leading-[29px] text-[#FF8B03] hover:bg-[#FF8B03] hover:text-white duration-500">Parcourir les évènements<i class="fa-solid fa-chevron-right ml-3 w-[18px] h-[31px]"></i></a>
          </div>
        </div>
      </section>
      <!-- fin de la première section -->

      <!-- section Explorer  les évènements par catégories  -->
      <section class="mt-8">
        <h2 class="font-sans not-italic font-bold text-[25px] leading-[30px] ml-40">Explorer  les évènements par catégories</h2>
        <div class="ml-44 mt-8">
          <div class="flex gap-20">
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 10.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Communautaire</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                festivals locaux, événements caritatifs, levées de fonds, événements religieux
              </p>
            </div>
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 11.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Culturel</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                expositions d'art, concerts, festivals, spectacles, représentations théâtrales
              </p>
            </div>
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 12.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Educatif</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                formations, workshops, webinaires, colloques
              </p>
            </div>
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 13.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Entreprise</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                conférences, séminaires, réunions, lancements de produits, soirées d'entreprise
              </p>
            </div>
          </div>
          <div class="flex gap-20 mt-8">
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 14.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Politique</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                festivals locaux, événements caritatifs, levées de fonds, événements religieux
              </p>
            </div>
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 17.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Social</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                expositions d'art, concerts, festivals, spectacles, représentations théâtrales
              </p>
            </div>
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 16.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Sportif</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                formations, workshops, webinaires, colloques
              </p>
            </div>
            <div>
              <img src="{{ asset('images/Evenement par catégories/Rectangle 15.png') }}" alt="">
              <p class="font-sans not-italic font-bold text-[25px] leading-[30px]">Virtuel</p>
              <p class="font-sans not-italic font-normal text-[15px] leading-[18px] text-[#777777] w-[180px]">
                conférences, séminaires, réunions, lancements de produits, soirées d'entreprise
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- fin de la section Explorer  les évènements par catégories -->

      <!-- section Evènement tendances -->
      <section class="mt-8">
        <div class="flex items-center gap-[40rem]">
          <h2 class="font-sans not-italic font-bold text-[25px] leading-[30px] ml-40">Evènement tendances</h2>
          <a href="" class="text-[#1D81CC] ">Voir tout<i class="fa-solid fa-chevron-right ml-3 w-[18px] h-[31px] mt-5 hover:ml-5 duration-500"></i></a>
        </div>
        <div class="flex ml-36 mt-8 gap-20">
          <div>
            <div>
                <img class="z-0" src="{{ asset('images/Evenement tendances et gratuit/Rectangle 20.png') }}" alt="">
                <i class="fas fa-heart z-40 w-[38px] h-[30px] py-2 px-2 rounded-full text-white bg-[#1D81CC] flex justify-center"></i>
                <div class="bg-white flex flex-col gap-3 pt-6 pl-2 py-5 mb-3 z-0">
                  <p class="font-sans not-italic font-bold text-[20px] leading-[24px] text-center uppercase">La nuit des amazone</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fas fa-calendar text-[#FF8B03]"></i>25 Mars 2023</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fa-sharp fa-solid fa-location-dot text-[#FF8B03]"></i>Palais des Congrès</p>
                </div>
            </div>
            <div class="mt-7">
                <a href="" class="font-sans not-italic font-bold text-[25px] leading-[30px] text-center bg-[#1D81CC] w-[285px] h-[62px] text-white px-14 py-4 border-b-4 border-gray-300 rounded-b-30">Voir les détails</a>
            </div>
          </div>
          <div>
            <div>
                <img src="{{ asset('images/Evenement tendances et gratuit/Rectangle 23.png') }}" alt="">
                <i class="fas fa-heart z-40 w-[38px] h-[30px] py-2 px-2 rounded-full text-white bg-[#1D81CC] flex justify-center"></i>
                <div class="bg-white flex flex-col gap-3 pt-6 pl-2 py-5 mb-3 z-0">
                  <p class="font-sans not-italic font-bold text-[20px] leading-[24px] text-center uppercase">Vacances en couleur</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fas fa-calendar text-[#FF8B03]"></i>15 Août 2023</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fa-sharp fa-solid fa-location-dot text-[#FF8B03]"></i>Canal Olympia</p>
                </div>
            </div>
            <div class="mt-7">
                <a href="" class="font-sans not-italic font-bold text-[25px] leading-[30px] text-center bg-[#1D81CC] w-[285px] h-[62px] text-white px-14 py-4 border-b-4 border-gray-300 rounded-b-30">Voir les détails</a>
            </div>
          </div>
          <div>
            <div>
                <img src="{{ asset('images/Evenement tendances et gratuit/Rectangle 26.png') }}" alt="">
                <i class="fas fa-heart z-40 w-[38px] h-[30px] py-2 px-2 rounded-full text-white bg-[#1D81CC] flex justify-center"></i>
                <div class="bg-white flex flex-col gap-3 pt-6 pl-2 py-5 mb-3 z-0">
                  <p class="font-sans not-italic font-bold text-[20px] leading-[24px] text-center uppercase">Fashion show</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fas fa-calendar text-[#FF8B03]"></i>Du 09 au 13 Mai 2023</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fa-sharp fa-solid fa-location-dot text-[#FF8B03]"></i>Institut Français</p>
                </div>
            </div>
            <div class="mt-7">
                <a href="" class="font-sans not-italic font-bold text-[25px] leading-[30px] text-center bg-[#1D81CC] w-[285px] h-[62px] text-white px-14 py-4 border-b-4 border-gray-300 rounded-b-30">Voir les détails</a>
            </div>
          </div>
        </div>
      </section>
      <!-- fin de la section Evènement tendances -->

      <!-- section Evènement gratuit -->
      <section class="mt-8">
        <div class="flex items-center gap-[40rem]">
          <h2 class="font-sans not-italic font-bold text-[25px] leading-[30px] ml-40">Evènement gratuit</h2>
          <a href="" class="text-[#1D81CC] ">Voir tout<i class="fa-solid fa-chevron-right ml-3 w-[18px] h-[31px] mt-5 hover:ml-5 duration-500"></i></a>
        </div>
        <div class="flex ml-36 mt-8 gap-20">
          <div>
            <div>
                <img src="{{ asset('images/Evenement tendances et gratuit/Rectangle 20.png') }}" alt="">
                <i class="fas fa-heart z-40 w-[38px] h-[30px] py-2 px-2 rounded-full text-white bg-[#1D81CC] flex justify-center"></i>
                <div class="bg-white flex flex-col gap-3 pt-6 pl-2 py-5 mb-3 z-0">
                  <p class="font-sans not-italic font-bold text-[20px] leading-[24px] text-center uppercase">La nuit des amazone</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fas fa-calendar text-[#FF8B03]"></i>25 Mars 2023</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fa-sharp fa-solid fa-location-dot text-[#FF8B03]"></i>Palais des Congrès</p>
                </div>
            </div>
            <div class="mt-7">
                <a href="" class="font-sans not-italic font-bold text-[25px] leading-[30px] text-center bg-[#1D81CC] w-[285px] h-[62px] text-white px-14 py-4 border-b-4 border-gray-300 rounded-b-30">Voir les détails</a>
            </div>
          </div>
          <div>
            <div>
                <img src="{{ asset('images/Evenement tendances et gratuit/Rectangle 35.png') }}" alt="">
                <i class="fas fa-heart z-40 w-[38px] h-[30px] py-2 px-2 rounded-full text-white bg-[#1D81CC] flex justify-center"></i>
                <div class="bg-white flex flex-col gap-3 pt-6 pl-2 py-5 mb-3 z-0">
                  <p class="font-sans not-italic font-bold text-[20px] leading-[24px] text-center uppercase">La nuit de la Poesie</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fas fa-calendar text-[#FF8B03]"></i>25 Mars 2023</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fa-sharp fa-solid fa-location-dot text-[#FF8B03]"></i>College La Plénitude</p>
                </div>
            </div>
            <div class="mt-7">
                <a href="" class="font-sans not-italic font-bold text-[25px] leading-[30px] text-center bg-[#1D81CC] w-[285px] h-[62px] text-white px-14 py-4 border-b-4 border-gray-300 rounded-b-30">Voir les détails</a>
            </div>
          </div>
          <div>
            <div>
                <img src="{{ asset('images/Evenement tendances et gratuit/Rectangle 32.png') }}" alt="">
                <i class="fas fa-heart z-40 w-[38px] h-[30px] py-2 px-2 rounded-full text-white bg-[#1D81CC] flex justify-center"></i>
                <div class="bg-white flex flex-col gap-3 pt-6 pl-2 py-5 mb-3 z-0">
                  <p class="font-sans not-italic font-bold text-[20px] leading-[24px] text-center uppercase">Job Fair</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fas fa-calendar text-[#FF8B03]"></i>17 Mars 2023</p>
                  <p class="font-sans not-italic font-normal text-[20px] leading-[24px] flex gap-3"><i class="fa-sharp fa-solid fa-location-dot text-[#FF8B03]"></i>ESGIS</p>
                </div>
            </div>
            <div class="mt-7">
                <a href="" class="font-sans not-italic font-bold text-[25px] leading-[30px] text-center bg-[#1D81CC] w-[285px] h-[62px] text-white px-14 py-4 border-b-4 border-gray-300 rounded-b-30">Voir les détails</a>
            </div>
          </div>
        </div>
      </section>
      <!-- fin de la section Evènement gratuit -->

    </main>
    <!-- fin du main -->

    <!-- debut du footer -->
    <footer class="bg-[#1D81CC]">
      <div class="flex justify-between pt-10 px-28 items-center">
        <div class="w-[407px] h-[202px] font-sans not-italic font-bold text-[20px] leading-[24px] text-white flex flex-col gap-5">
          <div>
            <p >Utiliser All in One</p>
            <ul class="ml-7 list-disc">
              <li>Gestion des évènements</li>
              <li>Participer à un évènement</li>
            </ul>
          </div>
          <div>
            <p>Rechercher des évènements</p>
            <ul class="ml-7 list-disc">
              <li>Catégorie</li>
              <li>Lieu</li>
              <li>Nom</li>
            </ul>
          </div>
        </div>
        <div class="font-sans not-italic font-bold text-[20px] leading-[24px] text-white">
          <p class="relative right-5">Restons connectés</p>
          <ul class="list-disc">
            <li>Nous contacter</li>
            <li>Twitter</li>
            <li>Facebook</li>
            <li>LinkedIn</li>
            <li>Instagram</li>
          </ul>
          <p>&copy; 2023 All in One</p>
        </div>
      </div>
      <div class="font-sans not-italic font-bold text-[20px] leading-[24px] text-white flex gap-14 ml-20 p-9">
      <p>.A propos </p>       <p>.Sécurité </p>        <p> .Développeurs </p>         <p>.Conditions</p>          <p>.Confidentialité</p>          <p>.Accessibilité</p>          <p>.Cookies</p>
      </div>
    </footer>
    <!-- fin du footer -->

</body>
</html>
