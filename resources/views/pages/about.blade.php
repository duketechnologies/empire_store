@extends('layouts.theme')
@section('title', 'О нас')

@section('content')
  <section id="about">
    <div class="main_img">
      <img src="/i/about/about_img.png" alt=""/>
    </div>
    <div class="empire-world">
        <div></div>
        <div class="title">
            <p>Мир</p>
            <svg width="183" height="29" viewBox="0 0 183 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0.527344C1.4503 0.631073 2.89494 0.775146 4.35091 0.792434C4.60584 0.798197 4.74747 0.867346 4.72481 1.14972C4.71348 1.26497 4.72481 1.38023 4.72481 1.49548C4.72481 9.73039 4.72481 17.9653 4.72481 26.2002C4.72481 26.9839 4.76447 26.909 4.06764 26.8917C2.70232 26.8572 1.35399 27.03 0 27.1395C0 26.9494 0 26.7534 0 26.5633C0.679829 26.4077 1.18404 25.9928 1.58627 25.4395C2.07914 24.7653 2.3794 24.0046 2.51537 23.1806C2.66267 22.2873 2.70799 21.3883 2.71365 20.4894C2.73631 16.8877 2.74198 13.286 2.74198 9.68428C2.74198 8.57208 2.74764 7.45988 2.71365 6.34768C2.69099 5.52361 2.58901 4.70531 2.38507 3.9043C2.1018 2.81515 1.50129 1.96803 0.566524 1.3687C0.402232 1.25921 0.232275 1.10361 0 1.2131C0 0.988355 0 0.757852 0 0.527344Z" fill="#212123"/>
                <path d="M135.262 14.576C135.257 14.7028 135.319 14.7258 135.364 14.7431C137.358 15.5211 138.837 16.9329 140.066 18.6675C140.86 19.7912 141.556 20.9784 142.282 22.1482C142.978 23.2661 143.715 24.3611 144.621 25.3177C145.941 26.7123 147.528 27.6228 149.397 28.0204C149.527 28.0492 149.658 28.0665 149.788 28.1011C149.879 28.1241 149.975 28.1587 149.952 28.2855C149.935 28.3777 149.85 28.3892 149.777 28.4065C149.052 28.539 148.321 28.6255 147.584 28.5678C145.618 28.4238 143.964 27.5709 142.525 26.2397C141.386 25.1851 140.452 23.9577 139.613 22.6553C138.899 21.5489 138.22 20.4194 137.517 19.3072C137.149 18.7251 136.764 18.1546 136.378 17.5899C135.455 16.2414 134.186 15.3367 132.73 14.6682C132.628 14.6221 132.52 14.5817 132.413 14.5529C132.362 14.5356 132.305 14.5414 132.254 14.5356C132.141 14.6739 132.18 14.8353 132.18 14.9851C132.18 16.8868 132.18 18.7885 132.186 20.6902C132.192 21.8082 132.311 22.9089 132.656 23.9807C132.821 24.4763 133.036 24.9431 133.336 25.3638C133.755 25.9631 134.311 26.378 135.002 26.597C135.109 26.6316 135.217 26.6719 135.33 26.6892C135.5 26.7238 135.614 26.8044 135.591 26.9946C135.568 27.2366 135.398 27.1733 135.251 27.1617C134.764 27.1214 134.277 27.0695 133.784 27.035C132.73 26.9716 131.676 26.8794 130.617 26.8967C130.209 26.9024 130.209 26.8851 130.192 26.4875C130.186 26.3723 130.192 26.257 130.192 26.1417C130.192 17.9414 130.192 9.74107 130.192 1.54649C130.192 1.50615 130.192 1.47158 130.192 1.43124C130.192 0.780052 130.141 0.791577 130.804 0.79734C132.333 0.803102 133.852 0.572594 135.376 0.480391C136.344 0.422763 137.302 0.463105 138.242 0.699376C139.936 1.12005 141.115 2.20344 141.845 3.77666C142.893 6.03564 142.961 8.37531 142.18 10.7265C141.687 12.219 140.656 13.2563 139.256 13.9306C139.092 14.0112 138.888 14.0285 138.769 14.2014C138.877 14.3051 139.013 14.3051 139.132 14.3282C141.007 14.6682 142.463 15.6767 143.675 17.1404C144.95 18.6848 146.128 20.3041 147.397 21.8543C148.417 23.0933 149.465 24.2977 150.774 25.2428C151.148 25.5078 151.539 25.7326 151.963 25.8997C152.808 26.2397 153.652 26.2512 154.496 25.8882C154.592 25.8478 154.7 25.7268 154.802 25.8421C154.915 25.9631 154.921 26.1245 154.83 26.2685C154.768 26.3665 154.694 26.4529 154.609 26.5336C153.929 27.2251 153.108 27.5421 152.145 27.4672C150.241 27.3231 148.559 26.62 147.091 25.3753C145.732 24.217 144.689 22.7821 143.675 21.3183C142.797 20.0505 141.959 18.7424 140.956 17.5668C139.993 16.4373 138.911 15.4634 137.494 14.9505C136.781 14.6682 136.044 14.5241 135.262 14.576ZM132.141 8.64615C132.141 9.94852 132.152 11.2567 132.135 12.559C132.129 12.8702 132.243 13.0085 132.532 13.0661C133.931 13.3485 135.336 13.4695 136.741 13.1929C138.429 12.8587 139.619 11.8848 140.14 10.1906C140.644 8.55971 140.673 6.90004 140.214 5.25767C139.88 4.05903 139.166 3.137 138.021 2.62412C136.667 2.01903 135.234 1.92107 133.812 2.26683C132.435 2.59531 132.481 2.79123 132.328 4.0014C132.141 5.54004 132.135 7.09022 132.141 8.64615Z" fill="#212123"/>
                <path d="M6.40505 13.8324C6.40505 9.74664 6.40505 5.65511 6.40505 1.56935C6.40505 1.43681 6.41071 1.2985 6.40505 1.16596C6.38805 0.895114 6.49569 0.779859 6.76762 0.791385C6.99423 0.80291 7.22084 0.797147 7.44745 0.791385C10.0875 0.779859 12.7331 0.831727 15.3731 0.751049C16.6931 0.71071 18.0131 0.630034 19.3331 0.566645C19.69 0.549357 20.0526 0.537828 20.4095 0.52054C20.6248 0.509015 20.7211 0.595453 20.7041 0.820198C20.6248 2.34155 20.8174 3.85139 20.8401 5.36122C20.8457 5.53986 20.9704 5.82223 20.6531 5.87409C20.3699 5.9202 20.3415 5.64359 20.2622 5.46495C20.0413 4.95207 19.775 4.46799 19.4521 4.0185C19.0102 3.40766 18.4437 2.98699 17.7072 2.83139C17.0954 2.70461 16.4835 2.58935 15.8603 2.57783C13.7869 2.53749 11.7077 2.5202 9.63423 2.58359C8.91475 2.60664 8.8411 2.68156 8.72213 3.4019C8.59183 4.19715 8.50119 4.99816 8.48419 5.80494C8.44453 7.74121 8.35956 9.67749 8.39355 11.6195C8.39355 11.7751 8.39355 11.925 8.39921 12.0805C8.40488 12.2188 8.48419 12.288 8.61449 12.2995C8.7108 12.3053 8.80144 12.3053 8.89775 12.3053C10.8976 12.2995 12.8974 12.2938 14.9029 12.2765C15.4864 12.2707 16.0643 12.1727 16.6421 12.0575C17.4013 11.9077 17.9338 11.4697 18.3077 10.7955C18.523 10.4094 18.693 10.006 18.8176 9.57952C18.8742 9.38359 18.9875 9.29139 19.1915 9.31444C19.4578 9.34326 19.3954 9.54494 19.3898 9.7063C19.3558 10.3748 19.3048 11.049 19.2765 11.7175C19.2085 13.3138 19.2935 14.9043 19.4351 16.489C19.4634 16.7944 19.4861 17.0999 19.4861 17.4111C19.4861 17.5782 19.5937 17.826 19.2991 17.8663C19.0159 17.9066 18.9422 17.728 18.9366 17.486C18.9366 17.411 18.9196 17.3361 18.9026 17.2554C18.489 15.0138 17.4919 14.351 15.4638 14.109C15.1635 14.0744 14.8633 14.0687 14.5573 14.0687C12.6878 14.0629 10.8183 14.0629 8.94874 14.0629C8.41054 14.0629 8.40488 14.0687 8.40488 14.5931C8.40488 17.2612 8.36522 19.9294 8.51252 22.5975C8.55217 23.2833 8.65415 23.969 8.7108 24.6605C8.7278 24.8795 8.82977 24.9602 9.02806 24.9775C9.31132 25.0005 9.58891 25.0582 9.87217 25.0639C11.872 25.1043 13.8718 25.1158 15.8717 25.0582C16.5118 25.0409 17.1463 24.9314 17.7752 24.7988C19.1632 24.5107 20.1999 23.6866 21.0554 22.5917C21.316 22.2633 21.5482 21.9117 21.7918 21.5717C21.8598 21.4795 21.9165 21.3758 21.9958 21.3009C22.0978 21.1972 22.2394 21.1799 22.364 21.2433C22.4887 21.3124 22.449 21.4449 22.4207 21.5544C22.2791 22.0731 22.1431 22.5917 21.9731 23.0988C21.5652 24.3148 21.1573 25.5307 20.8797 26.787C20.8231 27.0463 20.7551 27.1846 20.4378 27.15C16.0303 26.7005 11.6114 26.9599 7.19818 26.8907C6.36539 26.8792 6.41071 27.0463 6.41071 26.0955C6.40505 22.0097 6.40505 17.9182 6.40505 13.8324Z" fill="#212123"/>
                <path d="M166.996 13.8475C166.996 9.75602 166.996 5.67025 166.996 1.57872C166.996 1.46347 166.996 1.34821 166.996 1.23296C167.008 0.800756 167.008 0.789233 167.449 0.789233C169.149 0.783471 170.849 0.777708 172.548 0.789233C175.194 0.806521 177.834 0.691264 180.468 0.541434C181.426 0.483807 181.267 0.414657 181.261 1.33669C181.25 2.52957 181.358 3.7167 181.397 4.90382C181.403 5.13433 181.409 5.36483 181.414 5.59534C181.414 5.7106 181.42 5.83737 181.278 5.87194C181.137 5.90652 181.018 5.85466 180.95 5.71635C180.899 5.61262 180.859 5.50313 180.814 5.3994C180.582 4.89228 180.315 4.40822 179.981 3.96449C179.567 3.41127 179.046 3.01941 178.372 2.85805C177.84 2.73128 177.301 2.61602 176.752 2.59296C174.565 2.51229 172.373 2.51805 170.186 2.58144C169.483 2.59873 169.432 2.65635 169.296 3.35364C169.149 4.10855 169.081 4.87499 169.058 5.64143C168.985 7.67567 168.979 9.70991 168.99 11.7442C168.996 12.2916 168.996 12.2974 169.517 12.2974C171.5 12.2916 173.483 12.2858 175.466 12.2685C176.072 12.2628 176.667 12.1648 177.262 12.038C177.97 11.8824 178.497 11.4906 178.848 10.8452C179.029 10.5109 179.199 10.1652 179.318 9.80212C179.352 9.69263 179.392 9.58313 179.432 9.4794C179.505 9.30076 179.652 9.28924 179.811 9.31229C179.992 9.3411 179.981 9.47363 179.975 9.6177C179.924 10.4014 179.873 11.1852 179.839 11.9747C179.771 13.4326 179.885 14.8906 179.992 16.3428C180.026 16.7635 180.038 17.1841 180.055 17.6048C180.06 17.7662 179.998 17.8584 179.828 17.8641C179.681 17.8699 179.562 17.8296 179.528 17.6682C179.505 17.576 179.505 17.478 179.488 17.3858C179.171 15.2594 178.162 14.2913 176.044 14.1126C175.556 14.0723 175.064 14.0665 174.571 14.0665C172.888 14.0608 171.211 14.0608 169.529 14.0665C168.996 14.0665 168.99 14.0723 168.99 14.6082C168.996 17.0055 168.956 19.4085 169.036 21.8058C169.07 22.7452 169.166 23.6787 169.262 24.618C169.285 24.8486 169.37 24.9638 169.602 24.9811C169.846 24.9984 170.09 25.056 170.333 25.0618C172.373 25.1136 174.412 25.1194 176.446 25.056C177.086 25.0387 177.721 24.9235 178.349 24.7967C179.783 24.5028 180.819 23.6211 181.698 22.4974C181.93 22.1977 182.139 21.875 182.36 21.5638C182.434 21.4543 182.491 21.3218 182.61 21.2584C182.712 21.2065 182.831 21.1835 182.933 21.2526C183.029 21.316 183.001 21.4255 182.978 21.5177C182.859 21.9614 182.757 22.4109 182.61 22.8489C182.173 24.157 181.72 25.4594 181.431 26.8136C181.369 27.0903 181.273 27.1882 180.972 27.1594C176.548 26.7157 172.106 26.9692 167.676 26.9058C166.911 26.8943 166.991 26.9807 166.991 26.1855C166.996 22.0652 166.996 17.9564 166.996 13.8475Z" fill="#212123"/>
                <path d="M54.8177 5.60427C53.5487 8.43376 52.3306 11.2632 51.0956 14.087C49.8606 16.8992 48.6256 19.7171 47.3962 22.5293C47.3509 22.5293 47.3056 22.5293 47.2602 22.5293C44.0141 15.3144 40.7679 8.10529 37.499 0.838512C38.1562 0.734783 38.751 0.792407 39.3459 0.792407C39.5838 0.792407 39.6178 1.03444 39.6915 1.1958C40.224 2.35986 40.7565 3.5297 41.2834 4.69953C42.7677 7.97851 44.2463 11.2575 45.7306 14.5307C46.1555 15.47 46.5804 16.4151 47.011 17.3544C47.0903 17.5273 47.1413 17.7117 47.2886 17.8615C47.4472 17.7924 47.4642 17.631 47.5208 17.5043C49.0958 13.9544 50.665 10.3988 52.2343 6.84325C53.0671 4.95308 53.9112 3.06291 54.7327 1.16698C54.863 0.873085 55.0273 0.757828 55.3389 0.775116C55.6561 0.792404 55.9791 0.775122 56.302 0.780884C56.7439 0.786647 56.7439 0.792401 56.7665 1.21884C56.7892 1.65681 56.8175 2.10054 56.8345 2.53851C56.9251 4.74563 57.0158 6.94697 57.1064 9.15409C57.2424 12.2775 57.3784 15.4066 57.5143 18.53C57.605 20.6968 57.69 22.8636 57.7863 25.0303C57.8089 25.5087 57.8486 25.987 57.8599 26.4653C57.8712 26.8571 57.8599 26.8744 57.4973 26.8687C56.0414 26.8398 54.5967 27.0127 53.1464 27.128C52.9935 27.1395 52.7895 27.2548 52.7385 26.9781C52.6989 26.7592 52.8462 26.6842 53.0218 26.6151C54.4664 26.0619 55.1123 24.8748 55.4125 23.4283C55.5655 22.6907 55.5995 21.9415 55.5825 21.1924C55.5145 18.3341 55.3672 15.4758 55.2369 12.6175C55.1746 11.2748 55.1293 9.93207 55.0783 8.58935C55.0386 7.66732 54.999 6.75104 54.9593 5.82901C54.948 5.77714 54.9706 5.69647 54.8177 5.60427Z" fill="#212123"/>
                <path d="M81.9285 15.7849C81.9115 15.8771 81.8945 15.9347 81.8945 15.9866C81.9002 17.773 81.8945 19.5594 81.9285 21.3401C81.9455 22.2045 82.0872 23.0574 82.3478 23.8872C82.8066 25.3567 83.7187 26.3364 85.237 26.6591C85.3107 26.6764 85.39 26.6821 85.458 26.711C85.5883 26.7628 85.5996 26.8781 85.5883 26.9991C85.5713 27.1605 85.4693 27.1605 85.339 27.1489C84.8518 27.0971 84.3646 27.0452 83.8774 26.9991C82.767 26.8896 81.6509 26.8839 80.5406 26.8896C79.9287 26.8896 79.9287 26.9703 79.9287 26.2615C79.9287 18.8333 79.9287 11.4052 79.9287 3.97707C79.9287 3.11267 79.9287 2.24826 79.9287 1.38385C79.9287 0.807583 79.9344 0.80182 80.4669 0.778769C81.7869 0.721142 83.1012 0.565546 84.4156 0.473343C85.8375 0.369614 87.2425 0.484877 88.6192 0.899792C90.6133 1.50488 91.9787 2.83606 92.7888 4.75504C93.6669 6.81809 93.7745 8.96182 93.208 11.1228C92.4772 13.8889 90.0412 15.9116 87.0952 16.3035C85.5146 16.5167 83.9737 16.3381 82.4497 15.8944C82.2911 15.8483 82.1438 15.756 81.9285 15.7849ZM81.8945 9.37097C81.8945 10.875 81.8945 12.1198 81.8945 13.3703C81.8945 13.8486 81.9002 13.8601 82.3478 14.0215C83.7018 14.5055 85.0897 14.6611 86.523 14.4882C88.7438 14.2174 90.2564 13.0418 91.0099 10.9038C91.6161 9.17503 91.5651 7.4347 90.9363 5.72318C90.4037 4.27674 89.469 3.17605 88.0073 2.63436C86.6307 2.12724 85.203 2.0869 83.7697 2.31741C83.5261 2.35775 83.2939 2.43843 83.0672 2.52487C82.6933 2.6747 82.4497 2.93978 82.3251 3.33741C82.1665 3.85029 82.0872 4.38047 82.0305 4.9164C81.8605 6.48385 81.9059 8.05708 81.8945 9.37097Z" fill="#212123"/>
                <path d="M45.2825 27.1999C42.0136 19.9331 38.7958 12.7873 35.5836 5.64155C35.5439 5.64732 35.5043 5.65308 35.4703 5.65884C35.4363 6.20054 35.3853 6.73648 35.3626 7.27817C35.2267 10.5975 35.1077 13.911 34.9661 17.2304C34.8981 18.7805 34.8188 20.3365 34.7905 21.8924C34.7791 22.5897 34.8414 23.2697 35.0114 23.9439C35.3626 25.3616 36.1784 26.3297 37.6287 26.6639C37.7024 26.6812 37.7817 26.687 37.8497 26.7158C37.98 26.7677 37.9857 26.8829 37.98 27.0039C37.9743 27.171 37.8667 27.171 37.7421 27.1538C36.9206 27.0327 36.0821 27.0385 35.2607 26.9578C33.8387 26.8138 32.4337 26.9578 31.0231 27.0673C30.6832 27.0961 30.3489 27.1307 30.009 27.1595C29.8957 27.171 29.7711 27.1883 29.7314 27.0385C29.6917 26.8771 29.7201 26.7388 29.907 26.6697C31.5103 26.0877 32.1675 24.7449 32.581 23.2063C32.8246 22.3131 32.9323 21.3968 32.9719 20.4805C33.0739 18.3138 33.1419 16.147 33.2325 13.9802C33.3685 10.7185 33.4988 7.46257 33.6631 4.20088C33.6971 3.57274 33.5498 3.11174 33.0852 2.6853C32.3091 1.98224 31.4423 1.46936 30.4679 1.12936C30.2696 1.06021 30.0713 1.0141 29.873 0.944945C29.7087 0.893081 29.7087 0.749025 29.7257 0.610719C29.7484 0.455126 29.8617 0.455118 29.9863 0.472406C31.7142 0.685626 33.4535 0.668347 35.187 0.754787C35.5156 0.772075 35.6346 0.950714 35.7536 1.21004C36.473 2.81783 37.2039 4.41987 37.929 6.0219C39.351 9.17986 40.7786 12.3321 42.2006 15.49C43.5376 18.4578 44.8689 21.4199 46.2173 24.3819C46.3589 24.6873 46.3702 24.9409 46.2116 25.2463C45.883 25.8456 45.6224 26.4565 45.2825 27.1999Z" fill="#212123"/>
                <path d="M128.467 13.8459C128.467 17.9317 128.467 22.0174 128.467 26.109C128.467 26.2415 128.462 26.3798 128.467 26.5123C128.484 26.7717 128.405 26.91 128.122 26.8984C126.813 26.8466 125.527 27.0828 124.23 27.1751C123.89 27.1981 123.55 27.1981 123.21 27.1981C123.085 27.1981 122.995 27.1405 122.978 27.0022C122.961 26.8523 122.995 26.7371 123.159 26.7025C123.216 26.691 123.272 26.6852 123.323 26.6679C124.688 26.3222 125.55 25.4347 125.997 24.1035C126.28 23.2622 126.388 22.3862 126.433 21.5045C126.479 20.7208 126.473 19.9313 126.479 19.1476C126.484 15.1195 126.479 11.0913 126.479 7.05743C126.479 5.93947 126.377 4.83879 126.014 3.77269C125.55 2.3954 124.677 1.43879 123.289 1.00082C123.216 0.977771 123.136 0.972017 123.074 0.937441C122.955 0.874051 122.955 0.747269 122.972 0.632014C122.989 0.476421 123.097 0.476416 123.221 0.482178C124.292 0.562856 125.363 0.643534 126.439 0.712687C126.983 0.747263 127.532 0.770319 128.076 0.776082C128.365 0.781845 128.467 0.891333 128.462 1.19099C128.45 2.26286 128.456 3.34049 128.456 4.41236C128.467 7.55303 128.467 10.6995 128.467 13.8459Z" fill="#212123"/>
                <path d="M109.603 13.8244C109.603 9.75588 109.603 5.68165 109.603 1.61318C109.603 1.48064 109.597 1.34233 109.603 1.20979C109.614 0.800639 109.614 0.794874 110.022 0.789111C111.081 0.777586 112.135 0.754535 113.189 0.645043C113.659 0.598942 114.129 0.541312 114.594 0.483685C114.713 0.472159 114.832 0.454882 114.854 0.610476C114.877 0.743018 114.871 0.887074 114.707 0.944701C114.599 0.979278 114.486 1.00234 114.384 1.04268C113.274 1.46336 112.509 2.2298 112.118 3.37658C111.738 4.5003 111.625 5.67013 111.608 6.83995C111.568 9.79622 111.585 12.7525 111.58 15.7088C111.58 17.3223 111.58 18.9359 111.585 20.5494C111.591 21.5867 111.693 22.6183 111.942 23.6325C112.294 25.0616 113.172 26.0183 114.48 26.6003C114.548 26.6291 114.622 26.6522 114.69 26.681C114.871 26.7559 114.883 26.9057 114.843 27.0613C114.803 27.2169 114.673 27.1766 114.565 27.165C113.574 27.0325 112.571 26.9864 111.574 26.9403C111.047 26.9172 110.515 26.8942 109.988 26.9057C109.693 26.9115 109.591 26.802 109.597 26.5081C109.608 25.8338 109.603 25.1654 109.603 24.4911C109.603 20.9298 109.603 17.3799 109.603 13.8244Z" fill="#212123"/>
                <path d="M107.843 13.8235C107.843 17.9668 107.843 22.116 107.843 26.2594C107.843 26.9509 107.871 26.8818 107.242 26.899C105.826 26.9336 104.415 27.0489 103.005 27.1584C102.863 27.1699 102.682 27.2563 102.625 27.0374C102.574 26.8472 102.648 26.7146 102.852 26.6455C104.664 26.0577 105.339 24.6112 105.605 22.8536C105.786 21.6377 105.854 20.4102 105.854 19.1828C105.854 15.2123 105.854 11.236 105.854 7.26549C105.854 6.05532 105.763 4.85091 105.441 3.67532C105.078 2.35565 104.279 1.46244 103.005 1.01871C102.931 0.995663 102.857 0.97837 102.789 0.955319C102.631 0.903454 102.608 0.776669 102.625 0.632601C102.648 0.442432 102.778 0.459731 102.92 0.471257C103.877 0.551935 104.834 0.632607 105.797 0.695997C106.364 0.736336 106.931 0.759389 107.491 0.770915C107.758 0.776678 107.871 0.880398 107.848 1.15125C107.837 1.28379 107.848 1.42209 107.848 1.55463C107.843 5.65192 107.843 9.73769 107.843 13.8235Z" fill="#212123"/>
                <path d="M165.291 13.8609C165.291 17.9294 165.291 21.9978 165.291 26.0663C165.291 26.1989 165.296 26.3372 165.291 26.4697C165.28 26.8789 165.274 26.8961 164.872 26.8904C163.869 26.8731 162.872 26.9192 161.875 27.0172C161.404 27.0633 160.934 27.1094 160.464 27.1555C160.351 27.167 160.226 27.2073 160.186 27.0517C160.147 26.8904 160.164 26.7405 160.351 26.6772C160.368 26.6714 160.385 26.6656 160.402 26.6599C162.147 26.0894 162.809 24.6775 163.087 23.0006C163.206 22.2629 163.251 21.5138 163.268 20.7646C163.342 16.1372 163.302 11.5155 163.297 6.88802C163.297 5.8853 163.206 4.89412 162.945 3.92599C162.583 2.56023 161.801 1.56904 160.481 1.05616C160.413 1.02734 160.334 1.01005 160.271 0.969715C160.152 0.900563 160.169 0.779543 160.181 0.664289C160.198 0.543272 160.283 0.514459 160.385 0.520221C160.594 0.525984 160.798 0.531747 161.008 0.549035C162.305 0.647001 163.603 0.77378 164.906 0.779543C165.2 0.779543 165.296 0.88904 165.291 1.1887C165.28 2.12802 165.285 3.06734 165.285 4.01243C165.291 7.29717 165.291 10.5761 165.291 13.8609Z" fill="#212123"/>
                <path d="M64.006 27.1213C62.669 27.0291 61.332 26.9081 59.995 26.9023C59.7061 26.9023 59.6041 26.7986 59.5928 26.5047C59.5475 25.2369 59.4682 23.9748 59.4172 22.707C59.2812 19.5606 59.1566 16.4199 59.0263 13.2735C58.913 10.6284 58.7997 7.98333 58.6864 5.33825C58.6297 3.99554 58.5504 2.65282 58.4937 1.31588C58.4711 0.802995 58.4824 0.79147 58.9753 0.797233C60.5842 0.814521 62.1762 0.653165 63.7738 0.509097C63.9097 0.497572 64.091 0.393835 64.142 0.630106C64.1873 0.837563 64.0853 0.941303 63.8814 0.987405C61.9439 1.40808 60.8335 3.28095 60.7428 5.15383C60.6919 6.26603 60.7202 7.37825 60.7825 8.49045C60.8392 9.50469 60.8788 10.5247 60.9185 11.5389C61.0091 13.7633 61.0828 15.9877 61.1961 18.2121C61.281 19.8603 61.2697 21.5142 61.6323 23.1335C61.7569 23.6982 61.9269 24.2457 62.1762 24.7643C62.635 25.7094 63.3432 26.3548 64.3629 26.6199C64.4536 26.643 64.5442 26.6718 64.6405 26.6891C64.8218 26.7237 64.9011 26.8332 64.8728 27.0176C64.8445 27.2077 64.7085 27.1904 64.5669 27.1731C64.3799 27.1501 64.193 27.1328 64.006 27.1213Z" fill="#212123"/>
                <path d="M78.1955 13.8893C78.1955 17.9405 78.1955 21.9916 78.1955 26.0371C78.1955 26.1523 78.1955 26.2676 78.1955 26.3828C78.1899 26.8842 78.1898 26.8957 77.6913 26.8899C76.275 26.8727 74.8644 27.0167 73.4537 27.132C73.3971 27.1377 73.3404 27.1435 73.2837 27.1435C73.1308 27.1377 72.9212 27.2645 72.8872 26.9764C72.8645 26.7401 73.0401 26.7171 73.2101 26.6594C74.4848 26.2445 75.3346 25.3916 75.7425 24.0835C75.9577 23.4035 76.071 22.7004 76.122 21.9974C76.1843 21.1388 76.2353 20.2744 76.2353 19.4099C76.2297 15.7622 76.2353 12.1143 76.2297 8.46655C76.2297 7.02588 76.1957 5.59097 75.9237 4.16758C75.6292 2.62318 74.7964 1.55707 73.3234 1.03266C73.2498 1.00961 73.1818 0.980798 73.1081 0.96351C72.9325 0.917408 72.8588 0.796391 72.8928 0.617747C72.9325 0.433341 73.0741 0.462154 73.2101 0.47368C74.1505 0.548595 75.091 0.617753 76.0314 0.681143C76.5979 0.721482 77.1644 0.73877 77.7253 0.767583C78.1842 0.790634 78.1898 0.790631 78.1898 1.26894C78.1955 3.45877 78.1898 5.64283 78.1898 7.83266C78.1955 9.85537 78.1955 11.8723 78.1955 13.8893Z" fill="#212123"/>
                <path d="M92.7617 1.73047C95.3167 2.47386 97.2486 5.02673 97.4356 7.74096C97.6848 11.3772 95.9739 13.8321 92.8807 15.1921C93.8891 13.9244 94.6822 12.5413 95.0165 10.9335C95.3564 9.31419 95.3281 7.69486 94.9598 6.08707C94.5973 4.47351 93.8494 3.05589 92.7617 1.73047Z" fill="#212123"/>
                <path d="M143 12.802C144.961 9.0908 144.961 5.43148 142.757 1.8125C144.779 2.12945 146.688 4.71114 146.739 7.12571C146.796 9.89181 145.193 12.3583 143 12.802Z" fill="#212123"/>
            </svg>
            <p class="description">Empire  — это более 15 лет успешного создания трендов подарочных
                изделий в национальном стиле. Авторский почерк и высокое качество
                продукции позволили бренду завоевать высокую репутацию на рынке
                и украсить кабинеты многих крупных современных компаний,
                а также посольств и дипломатических представительств.
            </p>
        </div>
        <div></div>
        <div class="content">
            <svg viewBox="0 0 39 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4991 0C26.8661 6.51577 25.9659 9.50476 23.0738 16.1212C26.7006 14.9846 29.5183 15.1518 32.7954 17.4682C35.8401 19.6176 37.4079 24.3656 36.1228 27.8547C33.703 34.4213 29.3435 37.9677 24.3311 42.1301C21.6937 44.3169 23.7285 46.4388 25.9361 46.3222C28.1531 46.1997 29.4755 43.7089 26.6931 42.3987C27.863 40.8922 30.4482 41.8188 31.6683 43.5424C33.7179 43.4555 36.7254 42.5289 39 46.0405C36.9225 45.8291 35.2002 45.7438 33.1655 46.2425C30.6082 46.8722 28.7483 48.9795 25.9287 48.9999C23.496 49.0151 21.3962 47.7266 19.4991 45.9384C17.5964 47.7266 15.504 49.0151 13.0694 48.9999C10.2443 48.9795 8.38437 46.8722 5.83447 46.2425C3.79975 45.7438 2.07749 45.8291 0 46.0405C2.27464 42.5289 5.27465 43.4555 7.32982 43.5424C8.54433 41.8188 11.137 40.8922 12.3069 42.3987C9.52449 43.7089 10.8469 46.1997 13.0564 46.3222C15.2716 46.4388 17.2988 44.3169 14.6615 42.1301C9.64911 37.9677 5.28954 34.4213 2.87726 27.8547C1.59208 24.3656 3.15251 19.6176 6.20458 17.4682C9.47427 15.1518 12.2995 14.9846 15.9188 16.1212C13.0267 9.50476 12.1339 6.51577 19.4991 0ZM19.4991 41.4576C23.9684 37.0932 34.3131 31.2796 32.2579 23.6931C31.2257 19.8992 27.4631 17.5479 23.6336 19.5306C18.0614 22.4197 25.0211 28.0944 26.336 25.2568C24.5133 24.7718 24.7012 22.6073 26.1407 21.8319C27.6007 21.0575 29.6559 21.9768 29.933 23.6779C30.4706 27.0086 28.9082 28.3036 26.5332 29.6805C25.9287 32.9734 24.2232 35.0734 21.3534 36.4705C23.2635 30.2806 21.3664 29.4192 19.4991 24.931C17.6336 29.4192 15.7291 30.2806 17.6392 36.4705C14.7694 35.0734 13.0694 32.9734 12.4668 29.6805C10.0918 28.3036 8.52201 27.0086 9.06695 23.6779C9.34408 21.9768 11.3918 21.0575 12.8518 21.8319C14.2988 22.6073 14.4792 24.7718 12.664 25.2568C13.9715 28.0944 20.9386 22.4197 15.3664 19.5306C11.5369 17.5479 7.77433 19.8992 6.74209 23.6931C4.67948 31.2796 15.0316 37.0932 19.4991 41.4576ZM19.4991 16.4968C21.6658 11.9587 24.4185 8.17992 19.4991 3.99508C14.5815 8.17992 17.3342 11.9587 19.4991 16.4968Z" fill="#DEDCD8"/>
            </svg>
            <div class="image">
                <img src="/i/about/empire_world/hover1.png" alt=""/>
            </div>
            <h2>Ценности</h2>
            <p class="description">Empire с почитанием относится к историческому наследию и культурным ценностям каждого народа и считает необходимым сохранить частичку этого богатства в своих изделиях, как пример национального искусства той или иной страны.
            </p>
        </div>
        <div class="content">
            <svg viewBox="0 0 41 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9251 37.4475C40.9104 37.3041 40.8882 37.2135 40.8661 37.0928C40.8587 37.0626 40.8587 37.0324 40.8513 36.9946C40.7923 36.6625 40.7333 36.4512 40.6669 36.3681C40.4604 35.6435 40.1727 34.9415 39.767 34.2697C35.791 27.7103 25.7368 30.5182 28.3112 38.2703C29.0931 40.6329 31.7192 41.3122 32.9584 39.9007C34.4928 38.1495 33.7625 36.6021 32.1323 35.3189C36.6762 33.9678 37.3475 38.8364 35.3484 41.7425C31.7856 46.9357 25.7073 42.6407 25.3458 37.289C25.1467 34.2848 26.9687 31.8543 28.7095 29.7106C32.3462 25.8006 35.3189 22.3435 35.4443 16.4936C35.5329 12.0628 31.2692 8.37167 28.2153 5.68449C26.6515 4.31071 26.8728 1.9934 27.3818 0.0912383C22.4321 -0.807004 21.3035 5.15612 24.5861 7.92632C22.4395 8.54528 21.2002 9.79074 20.4994 11.3683C19.7987 9.79074 18.5594 8.55283 16.4128 7.92632C19.688 5.15612 18.5594 -0.807004 13.6171 0.0912383C14.1187 1.9934 14.34 4.31071 12.7836 5.68449C9.7223 8.37167 5.45865 12.0628 5.55454 16.4936C5.67257 22.3435 8.6527 25.8006 12.282 29.7106C14.0302 31.8543 15.8448 34.2848 15.653 37.289C15.299 42.6407 9.22069 46.9357 5.65044 41.7425C3.65139 38.8364 4.31528 33.9678 8.86662 35.3189C7.2364 36.6021 6.50612 38.1571 8.04044 39.9007C9.2797 41.3122 11.8984 40.6254 12.6877 38.2703C15.2621 30.5107 5.20785 27.7103 1.23188 34.2697C0.796668 34.9868 0.494229 35.7341 0.295062 36.5191C0.243426 36.6248 0.199167 36.7908 0.154908 37.0097C0.154908 37.0173 0.147531 37.0324 0.147531 37.0399C0.132778 37.1305 0.110648 37.1909 0.0958951 37.3041C0.0368827 37.7419 0 38.1948 0 38.6477C0 43.8107 4.09399 48 9.13955 48C9.36084 48 9.56739 47.9396 9.78131 47.9245C9.86245 47.9321 9.94359 47.9547 10.0247 47.9547C10.187 47.9245 10.3198 47.8792 10.4747 47.8415C12.5328 47.532 14.3474 46.5356 15.7194 45.0637C15.8743 44.9052 16.0292 44.792 16.1915 44.6108C17.8513 47.615 23.1624 47.615 24.8295 44.6184C26.504 46.6791 29.0341 47.9925 31.8593 47.9925C36.9049 47.9925 40.9989 43.8032 40.9989 38.6402C41.0063 38.2401 40.9767 37.8401 40.9251 37.4475ZM19.0094 41.6293C19.1126 40.4291 19.4151 39.3271 19.4446 38.0967C19.5405 34.3452 18.1611 30.6768 15.8006 27.8462C13.3442 24.8948 10.4526 21.9585 9.69279 18.0561C9.41986 16.252 9.44199 14.9764 10.3345 13.3913C11.3525 11.5948 14.0597 10.5833 15.8448 11.8288C21.842 16.0105 13.654 21.249 14.5244 13.7083C11.1607 14.7726 10.3272 19.7318 13.2925 21.7925C14.7088 22.7737 17.0472 22.6832 18.4856 22.5775C17.4972 25.6723 18.7955 28.7369 20.5068 31.2353C22.2182 28.7369 23.5165 25.6798 22.528 22.5775C23.9664 22.6756 26.3048 22.7737 27.7211 21.7925C30.6791 19.7393 29.8529 14.7801 26.4892 13.7083C27.3596 21.249 19.1717 16.0105 25.1688 11.8288C26.9539 10.5833 29.6685 11.5948 30.6791 13.3913C31.579 14.9764 31.5864 16.252 31.3208 18.0561C30.5611 21.9661 27.6694 24.8948 25.2131 27.8462C22.8599 30.6768 21.4731 34.3452 21.569 38.0967C21.6059 39.3271 21.901 40.4291 22.0043 41.6293C22.4616 46.7545 18.5668 46.7545 19.0094 41.6293Z" fill="#DEDCD8"/>
            </svg>
            <div class="image">
                <img src="/i/about/empire_world/hover1.png" alt=""/>
            </div>
            <h2>Исследование</h2>
            <p class="description">Наряду с изучением исторических фактов, музейных экспонатов, народных эпосов, легенд и деталей быта различных народов, компания проводит тщательное исследование современных методов производства, модных материалов и технологических новинок.
            </p>
        </div>
        <div class="content">
            <svg viewBox="0 0 33 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5023 0C25.6113 0 33 9.62798 33 21.4982C33 33.372 25.6113 43 16.5023 43C7.38965 43 0 33.372 0 21.4982C0 9.62798 7.38965 0 16.5023 0ZM16.5023 41.1972C17.3747 41.1972 18.2289 41.0966 19.0585 40.9018C17.9518 40.7467 16.9508 40.1153 16.5023 39.47C16.0538 40.1153 15.0528 40.7467 13.9415 40.9018C14.7747 41.0966 15.6299 41.1972 16.5023 41.1972ZM16.5023 38.6005C18.2936 40.8436 20.6183 40.7827 22.0468 39.7479C20.1588 39.7618 17.3957 38.9937 16.5023 36.1635C15.6043 38.9937 12.8412 39.7618 10.9578 39.7479C12.3817 40.7827 14.7109 40.8436 16.5023 38.6005ZM16.5023 31.4723C16.7229 29.9934 18.1332 28.786 19.1624 28.5119C19.3365 26.9288 18.3574 26.193 17.3391 27.0008C18.0438 25.2773 17.7093 25.162 16.5023 23.5862C15.2953 25.162 14.9562 25.2773 15.6654 27.0008C14.6471 26.193 13.6644 26.9288 13.8422 28.5119C14.8677 28.786 16.2817 29.9934 16.5023 31.4723ZM16.5023 20.7486C17.207 22.0862 18.0192 23.1385 19.0129 24.1484C20.4688 25.6198 20.9857 27.2131 19.8853 28.4288C22.7159 27.9091 25.2448 29.5181 25.3979 32.6732C25.5046 34.8287 24.1262 36.3435 21.9857 36.3222C20.6684 36.3075 19.3721 35.6659 19.1551 34.3136C19.0448 33.625 19.1369 32.8422 19.4541 32.2874C20.0631 34.1834 20.8462 32.5643 21.993 32.676C22.8162 32.7554 23.3887 33.5529 22.8518 34.6237C23.9412 33.924 24.1016 32.64 23.6531 31.5729C23.2857 30.7043 22.5883 30.1522 21.7797 29.9141C19.6 29.2762 17.6455 30.8335 17.3638 33.0582C17.0857 35.2976 18.3109 37.4005 20.4907 38.0632C22.1854 38.5756 23.9484 38.294 25.2694 37.31C27.1036 35.9429 27.6515 33.5197 27.3096 31.331C26.8575 28.4288 24.7498 26.5678 22.1644 26.4635C21.5372 22.4397 18.1332 21.956 16.5023 17.4199C14.8677 21.956 11.4664 22.4397 10.8402 26.4635C8.25113 26.5678 6.14619 28.4288 5.69402 31.331C5.35216 33.5197 5.90097 35.9429 7.73517 37.31C9.05612 38.294 10.8183 38.5756 12.5139 38.0632C14.6927 37.4005 15.9179 35.2976 15.6399 33.0582C15.3591 30.8335 13.4 29.2762 11.2212 29.9141C10.4163 30.1522 9.7143 30.7043 9.34783 31.5729C8.89931 32.64 9.05976 33.924 10.1528 34.6237C9.6113 33.5529 10.1847 32.7554 11.0106 32.676C12.1538 32.5643 12.9378 34.1834 13.5495 32.2874C13.8631 32.8422 13.9561 33.625 13.8458 34.3136C13.6316 35.6659 12.3352 36.3075 11.0143 36.3222C8.87835 36.3435 7.49995 34.8287 7.60661 32.6732C7.75977 29.5181 10.2877 27.9091 13.1192 28.4288C12.0189 27.2131 12.5349 25.6198 13.988 24.1484C14.9853 23.1385 15.7967 22.0862 16.5023 20.7486ZM16.5023 13.9075C17.6947 16.9223 19.5116 19.5615 21.5199 21.2785C25.3551 24.5592 29.1548 26.4746 28.9196 32.0529C30.1302 29.4996 30.3016 27.286 29.1329 25.4361C27.9897 23.6222 26.1136 22.0825 24.2794 20.5316C20.8106 17.6036 17.7093 13.7164 16.5023 8.41592C15.2953 13.7164 12.1894 17.6036 8.72518 20.5316C6.88734 22.0825 5.01395 23.6222 3.87077 25.4361C2.70297 27.286 2.87072 29.4996 4.08136 32.0529C3.8498 26.4746 7.64582 24.5592 11.4847 21.2785C13.4893 19.5615 15.3053 16.9223 16.5023 13.9075ZM15.8222 1.82498C15.8651 4.57582 15.7475 7.00638 14.9817 9.44337C14.0053 12.5413 11.7873 16.2983 8.99502 17.9424C7.57835 18.7759 5.4807 18.8082 4.23815 17.8418C3.06307 16.9334 2.84154 14.9063 3.693 13.6989C4.14152 13.0638 4.99664 12.7684 5.72959 12.9668C7.75249 13.5152 6.75517 16.5475 4.88633 15.318C5.20996 16.9149 6.5628 17.2722 7.87736 16.6842C9.74711 15.8442 11.2103 13.9906 12.2541 11.9893C13.895 8.85259 14.6143 5.54232 14.4119 2.0013C14.875 1.91084 15.3445 1.85359 15.8222 1.82498ZM13.7027 2.08437C13.6999 2.35484 13.7027 2.55701 13.6999 2.81271C12.503 3.48658 10.8967 4.17519 10.1774 5.42323C9.66871 6.30664 9.61858 7.31282 9.73254 8.56363C9.93947 10.8068 11.1392 13.0998 9.12722 15.1306C9.72161 13.1256 9.08801 11.4779 8.56108 9.98429C7.7388 7.6553 7.90927 5.18879 10.089 3.77183C11.1 3.11181 12.5777 2.41946 13.7027 2.08437ZM6.78432 6.71742C6.46343 9.29565 8.14084 11.2397 8.14084 13.6915C7.78439 11.236 4.9073 10.7994 3.72127 11.7511C4.52988 9.85507 5.56639 8.15284 6.78432 6.71742ZM2.07943 17.6257C3.24084 19.5762 5.16345 20.2215 7.06146 19.9409C4.73317 21.8268 2.69933 23.3656 2.11588 25.5977C1.9053 24.2749 1.79499 22.904 1.79499 21.4982C1.79499 20.1744 1.89072 18.8765 2.07943 17.6257ZM10.605 13.6555C11.2531 11.3006 10.192 9.71381 10.1956 7.64422C10.1993 5.22846 11.7053 4.4355 13.6963 3.45794C13.7136 4.08934 13.7318 4.59059 13.4893 5.05214C13.0126 5.95309 12.2249 6.08325 11.8192 6.69249C11.2887 7.49282 11.8584 8.61808 11.9159 10.035C11.976 11.4308 11.3242 12.5588 10.605 13.6555ZM17.1824 1.82498C17.1359 4.57582 17.2535 7.00638 18.0229 9.44337C18.9983 12.5413 21.2172 16.2983 24.005 17.9424C25.4262 18.7759 27.5202 18.8082 28.7664 17.8418C29.9415 16.9334 30.1621 14.9063 29.3116 13.6989C28.8621 13.0638 28.0079 12.7684 27.2741 12.9668C25.2512 13.5152 26.2485 16.5475 28.1182 15.318C27.7946 16.9149 26.4409 17.2722 25.1272 16.6842C23.2538 15.8442 21.7934 13.9906 20.7505 11.9893C19.1086 8.85259 18.3893 5.54232 18.5926 2.0013C18.1295 1.91084 17.6591 1.85359 17.1824 1.82498ZM19.301 2.08437C19.3046 2.35484 19.2973 2.55701 19.3046 2.81271C20.5016 3.48658 22.107 4.17519 22.8262 5.42323C23.3358 6.30664 23.386 7.31282 23.2684 8.56363C23.0614 10.8068 21.8654 13.0998 23.8773 15.1306C23.282 13.1256 23.9129 11.4779 24.4435 9.98429C25.2658 7.6553 25.0953 5.18879 22.9156 3.77183C21.9046 3.11181 20.4259 2.41946 19.301 2.08437ZM26.2202 6.71742C26.5375 9.29565 24.8637 11.2397 24.8637 13.6915C25.2193 11.236 28.0973 10.7994 29.2824 11.7511C28.4747 9.85507 27.4382 8.15284 26.2202 6.71742ZM30.9242 17.6257C29.7637 19.5762 27.8402 20.2215 25.9385 19.9409C28.2714 21.8268 30.3043 23.3656 30.8887 25.5977C31.0984 24.2749 31.2096 22.904 31.2096 21.4982C31.2096 20.1744 31.1093 18.8765 30.9242 17.6257ZM22.3996 13.6555C21.7478 11.3006 22.8126 9.71381 22.8089 7.64422C22.8016 5.22846 21.2984 4.4355 19.3083 3.45794C19.29 4.08934 19.2727 4.59059 19.5143 5.05214C19.992 5.95309 20.7787 6.08325 21.1853 6.69249C21.7122 7.49282 21.1461 8.61808 21.085 10.035C21.0285 11.4308 21.6767 12.5588 22.3996 13.6555Z" fill="#DEDCD8"/>
            </svg>
            <div class="image">
                <img src="/i/about/empire_world/hover1.png" alt=""/>
            </div>
            <h2>Создание</h2>
            <p class="description">На изготовление каждого изделия уходит
                не менее 6 месяцев, а новая продукция запускается в тираж только после приемки образца и отработки замечаний.
            </p>
        </div>
    </div>
    <div class="collections">
      <div class="description">
        <h2>Внимание <br/>к деталям</h2>
        <p><span>Каждая коллекция </span>- это плод <br/>совместной работы <br/>талантливых дизайнеров и <br/>целой группы исследователей, <br/>историков и художников.</p>
        <a href="#">Новые коллекции
            <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 6.83333L6.83333 1" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1H6.83333V6.83333" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a>
      </div>
      <div class="horses">
        <img src="/i/horses.png" alt=""/>
      </div>
    </div>

    <div class="brand">
      <img src="/i/pony.png" alt=""/>
      <div class="info">
        <h2>Развитие бренда</h2>
        <p>В 2010 году команда Empire запустила свой первый международный проект,<br/> с целью создания уникальной коллекции в арабском стиле.<br/><br/>
          Расширив географию своего присутствия, компания стала создавать единственные<br/>
          в своем роде коллекции сувениров для большинства стран Ближнего Востока,<br/> России, Китая и Гонконга. Среди партнеров бренда такие известные торговые марки<br/> как Reuge, Montegrappa, Alfredo Beretta, Boegli, Tardini, Zancan и многие другие.
        </p>
        <div class="brands">
          <img src="/i/about/brands/1.png" alt=""/>
          <img src="/i/about/brands/2.png" alt=""/>
          <img src="/i/about/brands/3.png" alt=""/>
        </div>
         <div class="brands">
          <img src="/i/about/brands/4.png" alt=""/>
          <img src="/i/about/brands/5.png" alt=""/>
          <img src="/i/about/brands/6.png" alt=""/>
        </div>
      </div>
    </div>

    <div class="partners">
      <a href="/partnership" class="card card-1">
        <div class="content">
          <h3>Партнерство</h3>
          <p>Узнайте больше об особых условиях<br/> для корпоративных клиентов</p>
        </div>
      </a>
      <div class="card card-2">
        <div class="content">
          <h3>Посетите один из наших <br/>фирменных магазинов</h3>
            <div class="links">
               <a href="/address">Адреса бутиков
                   <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M1 6.83333L6.83333 1" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M1 1H6.83333V6.83333" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                   </svg>
               </a>
               <a href="/contacts">Контакты
                    <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M1 6.83333L6.83333 1" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M1 1H6.83333V6.83333" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                   </svg>
               </a>
            </div>
        </div>
      </div>
      <div class="card card-3">
        <div class="content">
           <h3>Мы открыты <br/>к сотрудничеству</h3>
            <div class="links">
                <a href="/partnership">Партнерство
                    <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 6.83333L6.83333 1" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 1H6.83333V6.83333" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="/vacancies">Вакансии
                    <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 6.83333L6.83333 1" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 1H6.83333V6.83333" stroke="#5C8063" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
      </div>
    </div>

  </section>

@endsection
