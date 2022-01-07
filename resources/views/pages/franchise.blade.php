@extends('layouts.theme')
@section('title', 'Франшиза')

@section('content')
  <section id="franchise">
    <div class="hero">
      <div class="hero__title">
        <svg width="225" height="36" viewBox="0 0 225 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0.609375C1.77523 0.73846 3.54353 0.917751 5.3257 0.939265C5.63775 0.946436 5.81112 1.03249 5.78338 1.38389C5.76951 1.52731 5.78338 1.67074 5.78338 1.81417C5.78338 12.0621 5.78338 22.3099 5.78338 32.5578C5.78338 33.5331 5.83192 33.4399 4.97897 33.4184C3.30776 33.3754 1.65735 33.5905 0 33.7268C0 33.4901 0 33.2463 0 33.0096C0.832141 32.816 1.44931 32.2997 1.94166 31.6112C2.54496 30.7722 2.91249 29.8255 3.07892 28.8C3.25922 27.6885 3.31469 26.5697 3.32163 25.451C3.34937 20.9689 3.3563 16.4868 3.3563 12.0047C3.3563 10.6206 3.36324 9.23653 3.32163 7.85246C3.29389 6.82695 3.16907 5.80863 2.91942 4.81181C2.5727 3.45642 1.83764 2.40222 0.69345 1.6564C0.49235 1.52015 0.284315 1.32651 0 1.46276C0 1.18308 0 0.89623 0 0.609375Z" fill="white"/>
          <path d="M165.565 18.0937C165.558 18.2514 165.634 18.2801 165.69 18.3017C168.131 19.2698 169.941 21.0268 171.445 23.1854C172.416 24.5838 173.269 26.0611 174.157 27.5169C175.01 28.9081 175.911 30.2707 177.021 31.4611C178.636 33.1966 180.578 34.3297 182.867 34.8245C183.026 34.8603 183.186 34.8819 183.345 34.9249C183.456 34.9536 183.574 34.9966 183.546 35.1544C183.525 35.2691 183.421 35.2835 183.331 35.305C182.444 35.4699 181.549 35.5775 180.647 35.5058C178.241 35.3265 176.216 34.2651 174.455 32.6085C173.061 31.2962 171.917 29.7687 170.891 28.148C170.017 26.7711 169.185 25.3655 168.325 23.9814C167.874 23.2571 167.403 22.5471 166.931 21.8443C165.801 20.1662 164.247 19.0403 162.465 18.2084C162.34 18.1511 162.209 18.1009 162.077 18.065C162.014 18.0435 161.945 18.0506 161.883 18.0435C161.744 18.2156 161.793 18.4164 161.793 18.6028C161.793 20.9694 161.793 23.336 161.799 25.7025C161.806 27.0938 161.952 28.4635 162.375 29.7974C162.576 30.4141 162.84 30.995 163.207 31.5185C163.72 32.2643 164.4 32.7807 165.246 33.0532C165.378 33.0962 165.509 33.1464 165.648 33.1679C165.856 33.2109 165.995 33.3113 165.967 33.548C165.939 33.8492 165.731 33.7703 165.551 33.756C164.955 33.7058 164.358 33.6412 163.755 33.5982C162.465 33.5193 161.175 33.4046 159.879 33.4261C159.379 33.4332 159.379 33.4117 159.359 32.9169C159.352 32.7735 159.359 32.6301 159.359 32.4866C159.359 22.2818 159.359 12.0769 159.359 1.87921C159.359 1.82901 159.359 1.78598 159.359 1.73578C159.359 0.925418 159.296 0.939761 160.107 0.946932C161.98 0.954104 163.838 0.667249 165.704 0.552507C166.889 0.480793 168.061 0.530996 169.212 0.825023C171.286 1.34853 172.728 2.69674 173.623 4.65453C174.906 7.46571 174.989 10.3773 174.032 13.3032C173.429 15.1606 172.167 16.4514 170.454 17.2905C170.253 17.3909 170.003 17.4124 169.857 17.6275C169.989 17.7566 170.156 17.7566 170.301 17.7853C172.597 18.2084 174.379 19.4634 175.863 21.2849C177.423 23.2069 178.865 25.222 180.419 27.1511C181.667 28.693 182.95 30.1918 184.552 31.3679C185.009 31.6978 185.488 31.9775 186.008 32.1854C187.041 32.6085 188.074 32.6229 189.108 32.1711C189.225 32.1209 189.357 31.9703 189.482 32.1137C189.621 32.2643 189.628 32.4651 189.517 32.6444C189.44 32.7663 189.35 32.8739 189.246 32.9743C188.414 33.8348 187.409 34.2293 186.23 34.1361C183.9 33.9568 181.84 33.0819 180.044 31.5328C178.38 30.0914 177.104 28.3057 175.863 26.4842C174.788 24.9065 173.762 23.2786 172.534 21.8156C171.355 20.41 170.031 19.1981 168.297 18.5598C167.423 18.2084 166.522 18.0291 165.565 18.0937ZM161.744 10.7143C161.744 12.3351 161.758 13.963 161.737 15.5837C161.73 15.9709 161.869 16.1431 162.222 16.2148C163.935 16.5662 165.655 16.7168 167.375 16.3725C169.441 15.9566 170.898 14.7447 171.536 12.6363C172.153 10.6068 172.187 8.54141 171.626 6.49757C171.217 5.00592 170.343 3.85851 168.942 3.22025C167.285 2.46726 165.53 2.34535 163.79 2.77563C162.105 3.1844 162.16 3.42822 161.973 4.93421C161.744 6.84896 161.737 8.77807 161.744 10.7143Z" fill="white"/>
          <path d="M7.83805 17.1648C7.83805 12.0803 7.83805 6.9886 7.83805 1.9041C7.83805 1.73916 7.84498 1.56704 7.83805 1.4021C7.81725 1.06505 7.949 0.92162 8.28186 0.935963C8.55924 0.950306 8.83662 0.943134 9.114 0.935963C12.3455 0.92162 15.5839 0.986166 18.8154 0.885767C20.4311 0.835567 22.0468 0.735171 23.6626 0.656286C24.0995 0.634772 24.5433 0.620426 24.9801 0.598912C25.2437 0.584569 25.3615 0.692136 25.3407 0.97182C25.2436 2.86506 25.4794 4.74397 25.5072 6.62287C25.5141 6.84518 25.6667 7.19657 25.2783 7.26111C24.9316 7.31848 24.8969 6.97427 24.7998 6.75195C24.5294 6.1137 24.2035 5.5113 23.8082 4.95193C23.2673 4.19177 22.5739 3.66827 21.6724 3.47464C20.9235 3.31687 20.1745 3.17343 19.4117 3.15909C16.8737 3.10889 14.3287 3.08738 11.7907 3.16627C10.91 3.19495 10.8199 3.28818 10.6743 4.1846C10.5148 5.17425 10.4038 6.17107 10.383 7.17506C10.3345 9.58464 10.2305 11.9942 10.2721 14.411C10.2721 14.6046 10.2721 14.7911 10.279 14.9847C10.2859 15.1568 10.383 15.2428 10.5425 15.2572C10.6604 15.2644 10.7713 15.2644 10.8892 15.2644C13.3371 15.2572 15.785 15.25 18.2398 15.2285C18.9541 15.2213 19.6614 15.0994 20.3687 14.956C21.2979 14.7695 21.9498 14.2245 22.4074 13.3855C22.6709 12.905 22.879 12.403 23.0315 11.8723C23.1009 11.6285 23.2396 11.5137 23.4892 11.5424C23.8151 11.5783 23.7389 11.8293 23.7319 12.0301C23.6903 12.862 23.6279 13.701 23.5932 14.5329C23.51 16.5194 23.614 18.4987 23.7874 20.4708C23.8221 20.8509 23.8498 21.231 23.8498 21.6182C23.8498 21.8262 23.9816 22.1345 23.621 22.1847C23.2742 22.2349 23.1841 22.0126 23.1772 21.7114C23.1772 21.6182 23.1564 21.525 23.1356 21.4246C22.6293 18.6349 21.4089 17.8102 18.9263 17.509C18.5588 17.466 18.1913 17.4588 17.8168 17.4588C15.5284 17.4516 13.24 17.4516 10.9516 17.4516C10.2929 17.4516 10.2859 17.4588 10.2859 18.1114C10.2859 21.4317 10.2374 24.7521 10.4177 28.0725C10.4662 28.9258 10.591 29.7792 10.6604 30.6398C10.6812 30.9123 10.806 31.0127 11.0487 31.0342C11.3955 31.0629 11.7352 31.1346 12.082 31.1418C14.5298 31.192 16.9777 31.2063 19.4256 31.1346C20.2092 31.1131 20.9859 30.9769 21.7556 30.8119C23.4546 30.4533 24.7236 29.4278 25.7707 28.0653C26.0897 27.6565 26.374 27.2191 26.6722 26.7959C26.7554 26.6812 26.8247 26.5521 26.9218 26.4589C27.0466 26.3298 27.22 26.3083 27.3725 26.3872C27.5251 26.4732 27.4766 26.6382 27.4419 26.7744C27.2685 27.4198 27.1021 28.0653 26.8941 28.6964C26.3948 30.2095 25.8955 31.7227 25.5557 33.286C25.4864 33.6087 25.4031 33.7809 25.0148 33.7378C19.6198 33.1785 14.2109 33.5012 8.80888 33.4151C7.78951 33.4008 7.84499 33.6087 7.84499 32.4255C7.83805 27.341 7.83805 22.2493 7.83805 17.1648Z" fill="white"/>
          <path d="M204.412 17.1894C204.412 12.0978 204.412 7.01325 204.412 1.92158C204.412 1.77815 204.412 1.63472 204.412 1.49129C204.426 0.953441 204.426 0.939101 204.967 0.939101C207.047 0.93193 209.128 0.924759 211.208 0.939101C214.446 0.960615 217.678 0.817185 220.902 0.630729C222.074 0.559015 221.88 0.472962 221.873 1.62038C221.859 3.10486 221.991 4.58217 222.04 6.05947C222.047 6.34633 222.053 6.63318 222.06 6.92004C222.06 7.06346 222.067 7.22122 221.894 7.26425C221.721 7.30728 221.575 7.24274 221.492 7.07062C221.429 6.94154 221.381 6.80528 221.325 6.6762C221.041 6.04512 220.715 5.44273 220.306 4.89053C219.8 4.20208 219.162 3.71443 218.337 3.51363C217.685 3.35586 217.026 3.21243 216.353 3.18374C213.677 3.08335 210.993 3.09052 208.316 3.1694C207.456 3.19092 207.394 3.26263 207.228 4.13036C207.047 5.06981 206.964 6.0236 206.936 6.97739C206.846 9.50889 206.839 12.0404 206.853 14.5719C206.86 15.2532 206.86 15.2603 207.498 15.2603C209.925 15.2532 212.352 15.246 214.779 15.2245C215.521 15.2173 216.249 15.0954 216.977 14.9376C217.844 14.744 218.489 14.2563 218.919 13.4531C219.141 13.0372 219.349 12.6069 219.495 12.1551C219.536 12.0189 219.585 11.8826 219.633 11.7535C219.723 11.5312 219.904 11.5169 220.098 11.5456C220.32 11.5814 220.306 11.7464 220.299 11.9256C220.237 12.9009 220.174 13.8763 220.133 14.8587C220.049 16.6731 220.188 18.4875 220.32 20.2946C220.361 20.8182 220.375 21.3417 220.396 21.8652C220.403 22.066 220.327 22.1807 220.119 22.1879C219.938 22.1951 219.793 22.1449 219.751 21.9441C219.723 21.8293 219.723 21.7074 219.703 21.5927C219.314 18.9464 218.08 17.7416 215.487 17.5193C214.89 17.4691 214.287 17.462 213.684 17.462C211.624 17.4548 209.571 17.4548 207.512 17.462C206.86 17.462 206.853 17.4691 206.853 18.1361C206.86 21.1193 206.811 24.1098 206.909 27.0931C206.95 28.262 207.068 29.4238 207.186 30.5927C207.214 30.8796 207.318 31.023 207.602 31.0445C207.9 31.066 208.198 31.1377 208.497 31.1449C210.993 31.2095 213.489 31.2166 215.979 31.1378C216.762 31.1162 217.539 30.9728 218.309 30.815C220.063 30.4493 221.332 29.3521 222.407 27.9537C222.691 27.5807 222.948 27.1792 223.218 26.7919C223.309 26.6556 223.378 26.4907 223.524 26.4118C223.648 26.3473 223.794 26.3186 223.919 26.4047C224.037 26.4835 224.002 26.6198 223.974 26.7345C223.829 27.2867 223.704 27.8461 223.524 28.3911C222.99 30.019 222.435 31.6398 222.081 33.325C222.005 33.6693 221.887 33.7912 221.52 33.7553C216.104 33.2031 210.667 33.5186 205.244 33.4398C204.308 33.4254 204.405 33.533 204.405 32.5433C204.412 27.4158 204.412 22.3026 204.412 17.1894Z" fill="white"/>
          <path d="M67.1011 6.93358C65.5478 10.4547 64.0569 13.9759 62.5452 17.4898C61.0334 20.9895 59.5217 24.4963 58.0169 27.9959C57.9614 27.9959 57.906 27.9959 57.8505 27.9959C53.877 19.0173 49.9036 10.046 45.9023 1.00286C46.7067 0.873771 47.4349 0.945482 48.163 0.945482C48.4542 0.945482 48.4958 1.24668 48.586 1.44748C49.2378 2.89609 49.8897 4.35189 50.5346 5.80767C52.3514 9.88819 54.1613 13.9687 55.9782 18.042C56.4983 19.211 57.0184 20.3871 57.5454 21.556C57.6425 21.7711 57.7049 22.0006 57.8852 22.1871C58.0793 22.101 58.1001 21.9002 58.1695 21.7425C60.0973 17.3249 62.0181 12.9002 63.939 8.47542C64.9584 6.12321 65.9916 3.771 66.9971 1.41162C67.1566 1.04588 67.3577 0.90245 67.7391 0.923964C68.1274 0.945478 68.5227 0.923971 68.918 0.931142C69.4589 0.938314 69.4588 0.945475 69.4866 1.47616C69.5143 2.02118 69.549 2.57339 69.5698 3.11841C69.6807 5.86505 69.7917 8.6045 69.9027 11.3511C70.0691 15.238 70.2355 19.1321 70.4019 23.019C70.5129 25.7154 70.6169 28.4118 70.7348 31.1083C70.7625 31.7035 70.8111 32.2987 70.8249 32.8939C70.8388 33.3816 70.8249 33.4031 70.3811 33.3959C68.599 33.3601 66.8307 33.5752 65.0554 33.7186C64.8682 33.733 64.6186 33.8764 64.5562 33.5322C64.5076 33.2597 64.6879 33.1664 64.9029 33.0804C66.6712 32.3919 67.4617 30.9146 67.8292 29.1146C68.0165 28.1967 68.0581 27.2644 68.0373 26.3321C67.9541 22.7751 67.7738 19.2181 67.6143 15.6611C67.538 13.9902 67.4825 12.3193 67.4201 10.6484C67.3716 9.50093 67.323 8.36067 67.2745 7.21325C67.2606 7.14871 67.2883 7.04832 67.1011 6.93358Z" fill="white"/>
          <path d="M100.284 19.5989C100.263 19.7137 100.242 19.7854 100.242 19.8499C100.249 22.0731 100.242 24.2962 100.284 26.5121C100.305 27.5879 100.478 28.6492 100.797 29.6819C101.359 31.5106 102.475 32.7297 104.334 33.1313C104.424 33.1528 104.521 33.16 104.604 33.1959C104.763 33.2604 104.777 33.4038 104.763 33.5544C104.743 33.7552 104.618 33.7552 104.458 33.7409C103.862 33.6764 103.266 33.6118 102.669 33.5544C101.31 33.4182 99.944 33.411 98.5849 33.4182C97.8359 33.4182 97.8359 33.5186 97.8359 32.6365C97.8359 23.3926 97.8359 14.1487 97.8359 4.9048C97.8359 3.8291 97.8359 2.75339 97.8359 1.67768C97.8359 0.960547 97.8429 0.953376 98.4947 0.92469C100.11 0.852977 101.719 0.659346 103.328 0.544604C105.069 0.415519 106.788 0.558957 108.473 1.0753C110.914 1.82829 112.586 3.48487 113.577 5.87294C114.652 8.44029 114.784 11.108 114.09 13.7973C113.196 17.2396 110.214 19.7567 106.608 20.2444C104.673 20.5097 102.787 20.2874 100.922 19.7352C100.728 19.6778 100.547 19.5631 100.284 19.5989ZM100.242 11.6172C100.242 13.4889 100.242 15.0379 100.242 16.5941C100.242 17.1894 100.249 17.2037 100.797 17.4045C102.454 18.0069 104.153 18.2005 105.908 17.9854C108.626 17.6483 110.478 16.1854 111.4 13.5248C112.142 11.3734 112.079 9.20763 111.31 7.07773C110.658 5.27772 109.514 3.90798 107.725 3.23387C106.039 2.60279 104.292 2.55259 102.538 2.83944C102.239 2.88964 101.955 2.99005 101.678 3.09762C101.22 3.28408 100.922 3.61395 100.769 4.10877C100.575 4.74702 100.478 5.4068 100.409 6.07374C100.201 8.02435 100.256 9.98214 100.242 11.6172Z" fill="white"/>
          <path d="M55.4293 33.8054C51.4281 24.7623 47.4893 15.8698 43.5574 6.97728C43.5089 6.98446 43.4603 6.99163 43.4187 6.9988C43.3771 7.67291 43.3147 8.33986 43.287 9.01397C43.1205 13.1447 42.9749 17.2682 42.8015 21.3989C42.7183 23.328 42.6212 25.2643 42.5866 27.2006C42.5727 28.0683 42.649 28.9145 42.857 29.7536C43.287 31.5177 44.2855 32.7225 46.0608 33.1385C46.1509 33.16 46.248 33.1672 46.3312 33.203C46.4907 33.2676 46.4976 33.411 46.4907 33.5616C46.4838 33.7696 46.352 33.7695 46.1994 33.748C45.1939 33.5974 44.1676 33.6046 43.1621 33.5042C41.4216 33.3249 39.7018 33.5042 37.9751 33.6405C37.5591 33.6763 37.1499 33.7193 36.7339 33.7552C36.5952 33.7695 36.4426 33.7911 36.3941 33.6046C36.3455 33.4038 36.3802 33.2317 36.609 33.1456C38.5715 32.4213 39.3759 30.7504 39.8821 28.8356C40.1803 27.7241 40.3121 26.5838 40.3606 25.4436C40.4854 22.7471 40.5686 20.0507 40.6796 17.3543C40.846 13.2953 41.0055 9.24344 41.2066 5.18444C41.2482 4.40276 41.0679 3.82907 40.4993 3.29838C39.5493 2.42348 38.4883 1.78523 37.2956 1.36211C37.0528 1.27606 36.8101 1.21867 36.5674 1.13262C36.3663 1.06807 36.3663 0.888803 36.3871 0.71669C36.4149 0.523063 36.5536 0.523053 36.7061 0.544567C38.8211 0.809908 40.95 0.788404 43.072 0.895975C43.4742 0.917489 43.6198 1.13979 43.7654 1.46251C44.6461 3.46332 45.5407 5.45696 46.4283 7.4506C48.1688 11.3805 49.9163 15.3033 51.6569 19.2332C53.2934 22.9264 54.9231 26.6125 56.5735 30.2986C56.7468 30.6787 56.7607 30.9942 56.5665 31.3743C56.1643 32.1201 55.8453 32.8803 55.4293 33.8054Z" fill="white"/>
          <path d="M157.252 17.1833C157.252 22.2678 157.252 27.3523 157.252 32.444C157.252 32.609 157.245 32.7811 157.252 32.946C157.273 33.2687 157.176 33.4408 156.829 33.4265C155.227 33.3619 153.653 33.656 152.065 33.7707C151.649 33.7994 151.233 33.7994 150.817 33.7994C150.664 33.7994 150.553 33.7277 150.532 33.5556C150.512 33.3691 150.553 33.2257 150.754 33.1827C150.824 33.1683 150.893 33.1612 150.955 33.1396C152.627 32.7094 153.681 31.605 154.228 29.9484C154.575 28.9014 154.707 27.8113 154.762 26.7141C154.818 25.7388 154.811 24.7563 154.818 23.781C154.825 18.7682 154.818 13.7554 154.818 8.73545C154.818 7.34421 154.693 5.97447 154.249 4.64777C153.681 2.93381 152.613 1.74336 150.914 1.19833C150.824 1.16965 150.727 1.16249 150.65 1.11946C150.505 1.04057 150.505 0.882799 150.525 0.739371C150.546 0.545744 150.678 0.545737 150.831 0.552909C152.141 0.653308 153.452 0.753707 154.769 0.839764C155.435 0.882792 156.108 0.911484 156.773 0.918656C157.127 0.925827 157.252 1.06208 157.245 1.43499C157.231 2.76887 157.238 4.10992 157.238 5.4438C157.252 9.3522 157.252 13.2678 157.252 17.1833Z" fill="white"/>
          <path d="M134.16 17.1614C134.16 12.0984 134.16 7.02823 134.16 1.96524C134.16 1.8003 134.153 1.62819 134.16 1.46324C134.173 0.954077 134.173 0.946902 134.673 0.939731C135.969 0.925388 137.259 0.896702 138.549 0.760446C139.125 0.703075 139.7 0.631358 140.269 0.559644C140.414 0.545302 140.56 0.523802 140.588 0.717429C140.616 0.88237 140.609 1.06164 140.408 1.13335C140.276 1.17638 140.137 1.20508 140.012 1.25528C138.653 1.77879 137.717 2.73258 137.238 4.15969C136.774 5.5581 136.635 7.01388 136.614 8.46967C136.566 12.1486 136.587 15.8275 136.58 19.5064C136.58 21.5144 136.58 23.5224 136.587 25.5304C136.594 26.8212 136.718 28.1049 137.023 29.3671C137.453 31.1456 138.528 32.336 140.13 33.0603C140.213 33.0962 140.304 33.1248 140.387 33.1607C140.609 33.2539 140.623 33.4404 140.574 33.634C140.525 33.8276 140.366 33.7774 140.234 33.7631C139.021 33.5981 137.793 33.5408 136.573 33.4834C135.928 33.4547 135.276 33.426 134.631 33.4404C134.27 33.4476 134.146 33.3113 134.153 32.9456C134.166 32.1065 134.16 31.2746 134.16 30.4356C134.16 26.0037 134.16 21.5861 134.16 17.1614Z" fill="white"/>
          <path d="M132.007 17.1514C132.007 22.3076 132.007 27.471 132.007 32.6272C132.007 33.4878 132.042 33.4017 131.272 33.4232C129.539 33.4663 127.812 33.6097 126.085 33.7459C125.912 33.7603 125.69 33.8679 125.621 33.5954C125.558 33.3587 125.648 33.1938 125.898 33.1077C128.117 32.3762 128.942 30.5762 129.268 28.3889C129.49 26.8758 129.573 25.3483 129.573 23.8208C129.573 18.8797 129.573 13.9314 129.573 8.99037C129.573 7.48438 129.462 5.98556 129.067 4.5226C128.623 2.88035 127.646 1.7688 126.085 1.2166C125.995 1.18792 125.905 1.1664 125.822 1.13771C125.628 1.07317 125.6 0.915393 125.621 0.736109C125.648 0.499454 125.808 0.520982 125.981 0.535324C127.153 0.635724 128.325 0.736116 129.504 0.815001C130.197 0.865201 130.891 0.89389 131.577 0.908232C131.903 0.915404 132.042 1.04448 132.014 1.38153C132 1.54647 132.014 1.71859 132.014 1.88353C132.007 6.98237 132.007 12.0669 132.007 17.1514Z" fill="white"/>
          <path d="M202.324 17.2041C202.324 22.2671 202.324 27.3301 202.324 32.3931C202.324 32.5581 202.331 32.7302 202.324 32.8951C202.31 33.4043 202.303 33.4258 201.811 33.4186C200.584 33.3971 199.363 33.4545 198.143 33.5764C197.567 33.6338 196.991 33.6911 196.416 33.7485C196.277 33.7628 196.125 33.813 196.076 33.6194C196.028 33.4186 196.048 33.2322 196.277 33.1533C196.298 33.1461 196.319 33.1389 196.34 33.1318C198.475 32.4218 199.287 30.6648 199.627 28.5779C199.772 27.66 199.828 26.7277 199.848 25.7955C199.939 20.0368 199.89 14.2854 199.883 8.52679C199.883 7.27897 199.772 6.0455 199.453 4.84071C199.009 3.14109 198.052 1.90761 196.437 1.26936C196.353 1.23351 196.256 1.21199 196.18 1.16179C196.035 1.07574 196.055 0.925133 196.069 0.781706C196.09 0.631107 196.194 0.59525 196.319 0.602421C196.575 0.609593 196.825 0.616764 197.082 0.638278C198.67 0.760191 200.258 0.917962 201.853 0.925133C202.213 0.925133 202.331 1.0614 202.324 1.43431C202.31 2.60324 202.317 3.77217 202.317 4.94828C202.324 9.03596 202.324 13.1165 202.324 17.2041Z" fill="white"/>
          <path d="M78.345 33.7048C76.7085 33.59 75.0719 33.4394 73.4354 33.4323C73.0817 33.4323 72.9569 33.3032 72.943 32.9374C72.8875 31.3597 72.7905 29.7892 72.728 28.2115C72.5616 24.2959 72.4091 20.3875 72.2496 16.472C72.1109 13.1803 71.9722 9.88864 71.8335 6.59698C71.7641 4.92605 71.6671 3.25511 71.5977 1.59135C71.57 0.953103 71.5839 0.93876 72.1872 0.945931C74.1566 0.967445 76.1052 0.766647 78.0607 0.587363C78.2271 0.57302 78.449 0.443925 78.5114 0.737951C78.5669 0.99612 78.4421 1.12522 78.1924 1.18259C75.8208 1.7061 74.4617 4.03678 74.3507 6.36748C74.2883 7.75155 74.323 9.13564 74.3993 10.5197C74.4686 11.7819 74.5172 13.0512 74.5657 14.3134C74.6766 17.0815 74.7668 19.8497 74.9055 22.6178C75.0095 24.6688 74.9956 26.727 75.4394 28.7422C75.592 29.445 75.8 30.1262 76.1052 30.7717C76.6669 31.9478 77.5337 32.751 78.7819 33.0808C78.8928 33.1095 79.0038 33.1454 79.1217 33.1669C79.3436 33.2099 79.4407 33.3462 79.406 33.5757C79.3713 33.8123 79.2049 33.7908 79.0315 33.7693C78.8027 33.7406 78.5738 33.7191 78.345 33.7048Z" fill="white"/>
          <path d="M95.7115 17.2411C95.7115 22.2826 95.7115 27.3241 95.7115 32.3584C95.7115 32.5018 95.7115 32.6452 95.7115 32.7886C95.7046 33.4126 95.7046 33.4269 95.0943 33.4197C93.3607 33.3982 91.634 33.5775 89.9073 33.7209C89.838 33.7281 89.7687 33.7353 89.6993 33.7353C89.5121 33.7281 89.2555 33.8859 89.2139 33.5273C89.1862 33.2333 89.4011 33.2046 89.6092 33.1329C91.1694 32.6165 92.2096 31.5552 92.7089 29.9273C92.9724 29.081 93.1111 28.2061 93.1735 27.3312C93.2498 26.2627 93.3122 25.187 93.3122 24.1113C93.3052 19.5718 93.3122 15.0323 93.3052 10.4928C93.3052 8.7 93.2636 6.91434 92.9308 5.14301C92.5702 3.22108 91.5508 1.89437 89.7478 1.24177C89.6577 1.21309 89.5745 1.17723 89.4843 1.15572C89.2694 1.09835 89.1792 0.947749 89.2208 0.725436C89.2694 0.495952 89.4427 0.531809 89.6092 0.546152C90.7603 0.63938 91.9114 0.725443 93.0625 0.804328C93.756 0.854528 94.4494 0.876042 95.136 0.911899C95.6976 0.940584 95.7046 0.940581 95.7046 1.5358C95.7115 4.26093 95.7046 6.97887 95.7046 9.70399C95.7115 12.2211 95.7115 14.7311 95.7115 17.2411Z" fill="white"/>
          <path d="M113.543 2.11328C116.67 3.03839 119.035 6.21529 119.264 9.59301C119.569 14.1181 117.475 17.1731 113.689 18.8656C114.923 17.2879 115.894 15.5668 116.303 13.566C116.719 11.5508 116.684 9.53564 116.234 7.53483C115.79 5.52684 114.874 3.7627 113.543 2.11328Z" fill="white"/>
          <path d="M175.036 15.8867C177.436 11.2684 177.436 6.71456 174.738 2.21094C177.214 2.60536 179.551 5.81813 179.613 8.82294C179.683 12.2652 177.72 15.3345 175.036 15.8867Z" fill="white"/>
        </svg>
        <p>франшиза</p>
        <a class="request" href="#" data-remodal-target="franchise-modal">Подать заявку</a>
      </div>
      {{-- <img src="/i/franchise/franchise_img.png" alt=""/> --}}
      <div class="links">
        <a href="#">Условия франшизы</a>
        <a href="#">Об открытии</a>
        <a href="#">Экскурсия в бутик</a>
      </div>
    </div>
    <div class="team">
      <div class="team__title">
        <h2>Команда EMPIRE —<br/>помогаем друг-другу<br/>и развиваемся вместе</h2>
        <a href="#">Узнать индивидуальные условия</a>
      </div>
      <div class="team__content">
        <div>
          <p class="workers">консультантов</p>
          <p class="info">Маркетинговая поддержка<br/>на всех этапах</p>
        </div>
        <div>
          <p class="workers">семинаров в год</p>
          <p class="info">Маркетинговая поддержка<br/>на всех этапах</p>
        </div>
        <div>
          <p class="workers">бизнес тренеров</p>
          <p class="info">Маркетинговая поддержка<br/>на всех этапах</p>
        </div>
        <div>
          <p class="workers">Остались вопросы?</p>
          <p class="info">Маркетинговая поддержка<br/>на всех этапах</p>
        </div>
      </div>
    </div>
    <div class="rules">
      <div class="content">
        <div>
        <p>Условия франшизы</p>
        <ul>
          <li>Работу под именем бренда с безупречной репутацией</li>
          <li>Бизнес приносящий заработок (от 2 млн. тенге чистой прибыли в месяц)</li>
          <li>Авторский дизайн интерьера бутика</li>
          <li>Организационная поддержка и обучение</li>
          <li>Товар высокого качества, который признают известные политики, бизнесмены и иностранные гости</li>
        </ul>
        </div>
        <div>
          <p>Основные условия</p>
          <ul>
            <li>Стартовые затраты</li>
            <li>Паушальный взнос</li>
            <li>Отсутствие роялти</li>
            <li>Оптимальная площадь бутика 50 м2</li>
          </ul>
        </div>
        <div>
          <p>В стартовые затраты включены</p>
          <ul>
            <li>Затраты по открытию</li>
            <li>Аренда помещения</li>
            <li>Первоначальная закупка товара</li>
          </ul>
        </div>
        <div>
          <p>Паушальный взнос</p>
          <ul>
            <li>Право пользования брендом EMPIRE</li>
            <li>Поддержку на стадии организации и запускаой прибыли в месяц)</li>
          </ul>
        </div>
      </div>
      <a href="#" class="main-btn">ПОДАТЬ ЗАЯВКУ</a>
    </div>
    <div class="faq">
      <div class="questions">
        <p>Как узнать есть ли изделие в бутике?</p>
        <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="answers">
      </div>
      <div class="questions">
        <p>Сколько коллекций выходит каждый год?</p>
        <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="answers">
      </div>
      <div class="questions">
        <p>Где производят изделия Empire?</p>
        <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="answers">
      </div>
      <div class="questions">
        <p>Сколько коллекций выходит каждый год?</p>
        <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="answers">
      </div>
    </div>
    <div class="excursion">
      <svg width="835" height="382" viewBox="0 0 835 382" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 1C50.1667 18 135.661 88.4194 147 241.5C158.339 394.581 303.218 412.967 412 337C533 252.5 699.5 237 834.5 283.5" stroke="url(#paint0_linear_598_10276)"/>
        <defs>
        <linearGradient id="paint0_linear_598_10276" x1="406.959" y1="-6.86261" x2="406.959" y2="371.365" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FFE7B8"/>
        <stop offset="1" stop-color="#FFD29C"/>
        </linearGradient>
        </defs>
      </svg>
      <div class="description">
        <img src="/i/franchise/excursion_img.png" alt=""/>
        <p>Проведете личную встречу с основателем бренда Вольдемаром Айфельд в Алматы</p>
      </div>
      <div class="info">
        <h4>Экскурсия в бутик</h4>
        <p>Погрузитесь в атмосферу EMPIRE</p>
        <div class="cards">
          <p>Увидите вживую <br/>ассортимент <br/>продукции EMPIRE</p>
          <p>Получите подробные<br/>ответы на свои <br/>вопросы</p>
          <p>Рассчитаете <br/>оптимальную <br/>финансовую модель</p>
        </div>
        <a href="#" class="main-btn">записаться на Экскурсию</a>
      </div>
    </div>
    <div class="consultaion">
      <div class="call">
        <h1>Не нашли ответ на вопрос?</h1>
        <p>Наш консультант свяжется с вами, так же вы можете самостоятеьлно позвонить консультанту по франшизе <br/><span>Номер для обратной связи  +7 (778) 605-08-07</span></p>
        <form method="POST" action="#">
          <input type="tel" name="phone" placeholder="Номер телефона"/>
          <button type="submit" class="main-btn">Заказать консультацию</button>
        </form>
      </div>
    </div>
  </section>
@endsection
