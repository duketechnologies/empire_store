@extends('layouts.theme')

@section('title', 'Главная')

@section('content')

    <div class="hero">
{{--        <div class="wrapper">--}}
{{--        <div class="title">--}}
            <h1><span>Подарок</span><br/> скажет больше, <br/>чем слова</h1>
            <a href="#" class="main-btn">Перейти в каталог</a>
{{--        </div>--}}
        <img src="/i/hero_rabbit.png" alt="" />

{{--        </div>--}}
{{--        <h1>Hello world...</h1>--}}
{{--        <a data-remodal-target="testmodal" href="#">Call Modal</a>--}}
    </div>
    <div class="item">
        <div class="title">
            <svg viewBox="0 0 74 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0.599609C0.586461 0.643406 1.17063 0.704237 1.75938 0.711536C1.86247 0.713969 1.91974 0.743166 1.91058 0.86239C1.906 0.911053 1.91058 0.959716 1.91058 1.00838C1.91058 4.48534 1.91058 7.9623 1.91058 11.4393C1.91058 11.7702 1.92662 11.7385 1.64484 11.7312C1.09274 11.7166 0.547516 11.7896 0 11.8359C0 11.7556 0 11.6728 0 11.5926C0.274904 11.5269 0.47879 11.3517 0.641442 11.1181C0.840747 10.8334 0.962163 10.5122 1.01714 10.1643C1.07671 9.78716 1.09503 9.40759 1.09732 9.02802C1.10649 7.5073 1.10878 5.98659 1.10878 4.46587C1.10878 3.99628 1.11107 3.52668 1.09732 3.05708C1.08816 2.70914 1.04692 2.36364 0.964453 2.02543C0.84991 1.56557 0.607079 1.2079 0.229086 0.954851C0.162651 0.908621 0.0939254 0.842921 0 0.889151C0 0.794258 0 0.696935 0 0.599609Z" fill="#303133"/>
                <path d="M54.6959 6.53164C54.6936 6.58517 54.7188 6.59491 54.7371 6.60221C55.5435 6.93068 56.1414 7.5268 56.6385 8.25918C56.9592 8.73364 57.241 9.23487 57.5343 9.7288C57.816 10.2008 58.1138 10.6631 58.4804 11.067C59.0142 11.6559 59.6556 12.0403 60.4116 12.2082C60.4643 12.2203 60.517 12.2276 60.5696 12.2422C60.6063 12.252 60.6452 12.2666 60.6361 12.3201C60.6292 12.359 60.5948 12.3639 60.5651 12.3712C60.2718 12.4272 59.9763 12.4637 59.6785 12.4393C58.8836 12.3785 58.2146 12.0184 57.6328 11.4563C57.1723 11.0111 56.7943 10.4928 56.4553 9.94292C56.1666 9.47575 55.8917 8.99885 55.6076 8.52926C55.4587 8.28351 55.303 8.04263 55.1472 7.80418C54.7738 7.23482 54.2606 6.85282 53.6719 6.57058C53.6306 6.55111 53.5871 6.53408 53.5436 6.52191C53.5229 6.51461 53.5 6.51705 53.4794 6.51461C53.4336 6.57301 53.4496 6.64114 53.4496 6.7044C53.4496 7.50734 53.4496 8.31028 53.4519 9.11321C53.4542 9.58524 53.5023 10.05 53.6421 10.5025C53.7085 10.7118 53.7956 10.9089 53.917 11.0865C54.0865 11.3395 54.311 11.5147 54.5905 11.6072C54.634 11.6218 54.6775 11.6388 54.7234 11.6461C54.7921 11.6607 54.8379 11.6948 54.8287 11.7751C54.8196 11.8773 54.7508 11.8505 54.6913 11.8456C54.4943 11.8286 54.2973 11.8067 54.098 11.7921C53.6719 11.7653 53.2458 11.7264 52.8174 11.7337C52.6524 11.7361 52.6524 11.7288 52.6455 11.561C52.6433 11.5123 52.6455 11.4636 52.6455 11.415C52.6455 7.95261 52.6455 4.49024 52.6455 1.03031C52.6455 1.01328 52.6455 0.998676 52.6455 0.981644C52.6455 0.706699 52.6249 0.711565 52.893 0.713998C53.5115 0.716431 54.1254 0.619106 54.7417 0.580175C55.1334 0.555844 55.5206 0.572877 55.9009 0.672636C56.5858 0.850256 57.0623 1.30768 57.3579 1.97193C57.7817 2.92573 57.8092 3.91358 57.493 4.90631C57.2937 5.53649 56.8768 5.97445 56.3109 6.25913C56.2445 6.2932 56.162 6.30049 56.1139 6.37349C56.1574 6.41729 56.2124 6.41729 56.2605 6.42702C57.0188 6.57058 57.6076 6.99637 58.0978 7.61439C58.6133 8.26648 59.0898 8.95019 59.6029 9.60471C60.0153 10.1278 60.4391 10.6364 60.9683 11.0354C61.1195 11.1473 61.2775 11.2422 61.4493 11.3128C61.7907 11.4563 62.132 11.4612 62.4734 11.3079C62.5123 11.2909 62.5558 11.2398 62.5971 11.2884C62.6429 11.3395 62.6452 11.4077 62.6085 11.4685C62.5833 11.5099 62.5535 11.5464 62.5192 11.5804C62.2443 11.8724 61.9121 12.0062 61.5227 11.9746C60.7529 11.9138 60.0725 11.6169 59.4792 11.0914C58.9294 10.6023 58.5079 9.99644 58.0978 9.37842C57.7427 8.84313 57.4037 8.29081 56.9982 7.79445C56.6087 7.31755 56.1712 6.90635 55.5985 6.6898C55.3098 6.57057 55.012 6.50975 54.6959 6.53164ZM53.4336 4.02794C53.4336 4.57783 53.4382 5.13015 53.4313 5.68004C53.429 5.81143 53.4748 5.86983 53.5917 5.89416C54.1575 6.01338 54.7257 6.06448 55.2938 5.94769C55.9765 5.80657 56.4575 5.39537 56.6683 4.68002C56.8722 3.99144 56.8836 3.2907 56.6981 2.59725C56.5629 2.09116 56.2743 1.70185 55.8115 1.4853C55.264 1.22982 54.6844 1.18846 54.1094 1.33445C53.5527 1.47314 53.5711 1.55586 53.5092 2.06682C53.4336 2.71647 53.4313 3.37099 53.4336 4.02794Z" fill="#303133"/>
                <path d="M2.59054 6.21669C2.59054 4.49159 2.59054 2.76406 2.59054 1.03896C2.59054 0.982998 2.59283 0.924602 2.59054 0.86864C2.58367 0.754282 2.6272 0.705619 2.73716 0.710486C2.82879 0.715352 2.92043 0.712919 3.01206 0.710486C4.0796 0.705619 5.14944 0.727519 6.21698 0.693455C6.75075 0.676423 7.28452 0.64236 7.81829 0.615595C7.96262 0.608296 8.10923 0.603429 8.25356 0.596129C8.34061 0.591263 8.37955 0.627759 8.37268 0.722651C8.34061 1.365 8.4185 2.00249 8.42766 2.63997C8.42995 2.7154 8.48035 2.83462 8.35206 2.85652C8.23752 2.87598 8.22606 2.7592 8.19399 2.68377C8.10465 2.46722 7.99698 2.26283 7.8664 2.07305C7.68771 1.81513 7.45862 1.63752 7.16081 1.57182C6.9134 1.51829 6.66599 1.46963 6.41399 1.46476C5.57554 1.44773 4.73479 1.44043 3.89633 1.4672C3.60539 1.47693 3.57561 1.50856 3.5275 1.8127C3.47482 2.14848 3.43816 2.48668 3.43129 2.82732C3.41525 3.64486 3.38089 4.4624 3.39464 5.28237C3.39464 5.34806 3.39463 5.41132 3.39693 5.47702C3.39922 5.53541 3.43129 5.56461 3.48398 5.56947C3.52292 5.57191 3.55958 5.57191 3.59852 5.57191C4.4072 5.56948 5.21587 5.56704 6.02684 5.55974C6.26279 5.55731 6.49646 5.51595 6.73013 5.46728C7.03711 5.40402 7.25245 5.2191 7.40364 4.93443C7.4907 4.77141 7.55942 4.60108 7.60982 4.42103C7.63273 4.3383 7.67855 4.29938 7.76102 4.30911C7.86869 4.32128 7.84349 4.40643 7.8412 4.47456C7.82745 4.7568 7.80684 5.04148 7.79538 5.32373C7.76789 5.99771 7.80225 6.66926 7.85953 7.33837C7.87098 7.46733 7.88014 7.59629 7.88014 7.72768C7.88014 7.79824 7.92367 7.90286 7.80454 7.91989C7.69 7.93693 7.66022 7.8615 7.65793 7.7593C7.65793 7.72767 7.65106 7.69604 7.64418 7.66198C7.47695 6.71548 7.07376 6.43568 6.25363 6.33348C6.13222 6.31889 6.0108 6.31645 5.88709 6.31645C5.13111 6.31402 4.37512 6.31402 3.61914 6.31402C3.40151 6.31402 3.39922 6.31645 3.39922 6.53787C3.39922 7.66441 3.38318 8.79096 3.44274 9.91751C3.45878 10.2071 3.50001 10.4966 3.52292 10.7886C3.5298 10.881 3.57103 10.9151 3.65121 10.9224C3.76576 10.9321 3.87801 10.9565 3.99255 10.9589C4.80122 10.9759 5.6099 10.9808 6.41857 10.9565C6.67744 10.9492 6.93402 10.9029 7.1883 10.847C7.74957 10.7253 8.16879 10.3774 8.51471 9.91507C8.62009 9.77638 8.71402 9.62796 8.81252 9.48441C8.84001 9.44548 8.86292 9.40168 8.895 9.37005C8.93623 9.32625 8.9935 9.31895 9.0439 9.34572C9.0943 9.37492 9.07827 9.43088 9.06681 9.47711C9.00954 9.69609 8.95456 9.91507 8.88583 10.1292C8.72089 10.6426 8.55595 11.156 8.4437 11.6864C8.42079 11.7959 8.3933 11.8543 8.26501 11.8397C6.48272 11.6499 4.69584 11.7594 2.91126 11.7302C2.57451 11.7253 2.59283 11.7959 2.59283 11.3944C2.59054 9.66933 2.59054 7.94179 2.59054 6.21669Z" fill="#303133"/>
                <path d="M67.5286 6.22443C67.5286 4.4969 67.5286 2.77179 67.5286 1.04426C67.5286 0.9956 67.5286 0.946937 67.5286 0.898274C67.5332 0.715788 67.5332 0.710923 67.7119 0.710923C68.3992 0.70849 69.0864 0.706057 69.7737 0.710923C70.8435 0.718222 71.911 0.669558 72.9763 0.606296C73.3634 0.581965 73.2993 0.552768 73.297 0.942071C73.2924 1.44573 73.336 1.94696 73.352 2.44819C73.3543 2.54552 73.3566 2.64284 73.3589 2.74017C73.3589 2.78883 73.3612 2.84236 73.3039 2.85696C73.2466 2.87155 73.1985 2.84966 73.171 2.79126C73.1504 2.74746 73.1344 2.70123 73.116 2.65744C73.0221 2.44332 72.9144 2.23894 72.7793 2.05159C72.612 1.81801 72.4013 1.65255 72.1287 1.58443C71.9133 1.5309 71.6957 1.48223 71.4735 1.4725C70.5892 1.43843 69.7027 1.44087 68.8184 1.46763C68.5343 1.47493 68.5137 1.49926 68.4587 1.79367C68.3992 2.11241 68.3717 2.43602 68.3625 2.75963C68.3327 3.61853 68.3304 4.47743 68.335 5.33633C68.3373 5.56748 68.3373 5.56991 68.5481 5.56991C69.3499 5.56748 70.1517 5.56504 70.9535 5.55774C71.1986 5.55531 71.4391 5.51395 71.6797 5.46042C71.966 5.39472 72.1791 5.22927 72.3211 4.95676C72.3944 4.81564 72.4631 4.66965 72.5112 4.51636C72.525 4.47013 72.541 4.4239 72.5571 4.38011C72.5868 4.30468 72.6464 4.29981 72.7105 4.30955C72.7839 4.32171 72.7793 4.37767 72.777 4.4385C72.7564 4.76941 72.7357 5.10032 72.722 5.43366C72.6945 6.04924 72.7403 6.66483 72.7839 7.27798C72.7976 7.4556 72.8022 7.63322 72.8091 7.81084C72.8113 7.87897 72.7861 7.9179 72.7174 7.92033C72.6579 7.92276 72.6098 7.90573 72.596 7.83761C72.5868 7.79868 72.5868 7.75731 72.58 7.71838C72.4517 6.82055 72.0439 6.41178 71.1871 6.33635C70.9901 6.31932 70.7908 6.31689 70.5915 6.31689C69.9111 6.31446 69.233 6.31446 68.5526 6.31689C68.3373 6.31689 68.335 6.31932 68.335 6.5456C68.3373 7.55779 68.3213 8.57241 68.3533 9.5846C68.3671 9.9812 68.406 10.3754 68.445 10.772C68.4541 10.8693 68.4885 10.918 68.5824 10.9253C68.6809 10.9326 68.7794 10.9569 68.8779 10.9593C69.7027 10.9812 70.5274 10.9837 71.3498 10.9569C71.6086 10.9496 71.8652 10.9009 72.1195 10.8474C72.6991 10.7233 73.1183 10.351 73.4734 9.87658C73.5673 9.75005 73.6521 9.6138 73.7414 9.48241C73.7712 9.43618 73.7941 9.38021 73.8422 9.35345C73.8835 9.33155 73.9316 9.32182 73.9728 9.35102C74.0118 9.37779 74.0003 9.42401 73.9911 9.46294C73.943 9.65029 73.9018 9.84008 73.8422 10.025C73.6658 10.5773 73.4826 11.1272 73.3657 11.699C73.3405 11.8158 73.3016 11.8572 73.1802 11.845C71.391 11.6576 69.595 11.7647 67.8035 11.7379C67.4943 11.7331 67.5263 11.7696 67.5263 11.4338C67.5286 9.69409 67.5286 7.95926 67.5286 6.22443Z" fill="#303133"/>
                <path d="M22.1672 2.74476C21.6541 3.93944 21.1615 5.13411 20.6621 6.32635C20.1627 7.51372 19.6633 8.70353 19.1662 9.89091C19.1479 9.89091 19.1295 9.89091 19.1112 9.89091C17.7986 6.84461 16.4859 3.80075 15.1641 0.732554C15.4298 0.688757 15.6703 0.713087 15.9109 0.713087C16.0071 0.713087 16.0208 0.81528 16.0506 0.883408C16.266 1.3749 16.4813 1.86883 16.6944 2.36276C17.2946 3.74722 17.8925 5.13167 18.4927 6.5137C18.6645 6.9103 18.8363 7.30934 19.0104 7.70594C19.0425 7.77894 19.0631 7.8568 19.1227 7.92006C19.1868 7.89086 19.1937 7.82273 19.2166 7.76921C19.8535 6.27039 20.488 4.76914 21.1226 3.26789C21.4594 2.46982 21.8007 1.67175 22.1329 0.871242C22.1856 0.747152 22.252 0.698487 22.378 0.705787C22.5063 0.713086 22.6369 0.705789 22.7674 0.708222C22.9461 0.710656 22.9461 0.713085 22.9553 0.893138C22.9644 1.07806 22.9759 1.26541 22.9828 1.45033C23.0194 2.38223 23.0561 3.31168 23.0927 4.24358C23.1477 5.56234 23.2027 6.88354 23.2577 8.20231C23.2943 9.11717 23.3287 10.032 23.3676 10.9469C23.3768 11.1488 23.3928 11.3508 23.3974 11.5527C23.402 11.7182 23.3974 11.7255 23.2508 11.7231C22.6621 11.7109 22.0779 11.7839 21.4914 11.8326C21.4296 11.8374 21.3471 11.8861 21.3265 11.7693C21.3104 11.6768 21.37 11.6452 21.441 11.616C22.0252 11.3824 22.2864 10.8812 22.4078 10.2705C22.4696 9.95904 22.4834 9.64273 22.4765 9.32642C22.449 8.11958 22.3894 6.91274 22.3368 5.7059C22.3116 5.13898 22.2932 4.57206 22.2726 4.00513C22.2566 3.61583 22.2405 3.22896 22.2245 2.83965C22.2199 2.81775 22.2291 2.78369 22.1672 2.74476Z" fill="#303133"/>
                <path d="M33.129 7.0425C33.1221 7.08143 33.1152 7.10576 33.1152 7.12766C33.1175 7.88193 33.1152 8.63621 33.129 9.38805C33.1359 9.75302 33.1931 10.1131 33.2985 10.4635C33.4841 11.084 33.8529 11.4976 34.4668 11.6338C34.4966 11.6411 34.5287 11.6436 34.5562 11.6557C34.6089 11.6776 34.6135 11.7263 34.6089 11.7774C34.602 11.8455 34.5608 11.8455 34.5081 11.8407C34.3111 11.8188 34.1141 11.7969 33.917 11.7774C33.468 11.7312 33.0167 11.7287 32.5677 11.7312C32.3203 11.7312 32.3203 11.7652 32.3203 11.466C32.3203 8.32963 32.3203 5.19331 32.3203 2.05699C32.3203 1.69201 32.3203 1.32704 32.3203 0.962071C32.3203 0.718757 32.3226 0.716324 32.5379 0.706591C33.0717 0.68226 33.6032 0.616564 34.1347 0.577634C34.7097 0.533837 35.2778 0.582503 35.8345 0.75769C36.6409 1.01317 37.193 1.57522 37.5206 2.38546C37.8756 3.25653 37.9192 4.16166 37.6901 5.07408C37.3946 6.24199 36.4095 7.09602 35.2182 7.26148C34.5791 7.35151 33.956 7.27608 33.3397 7.08873C33.2756 7.06926 33.216 7.03033 33.129 7.0425ZM33.1152 4.33441C33.1152 4.96946 33.1152 5.49502 33.1152 6.02301C33.1152 6.22496 33.1175 6.22983 33.2985 6.29796C33.846 6.50234 34.4073 6.56803 34.9869 6.49504C35.8849 6.38068 36.4965 5.88432 36.8012 4.98162C37.0464 4.25168 37.0257 3.51687 36.7715 2.79423C36.5561 2.18351 36.1781 1.71878 35.5871 1.49006C35.0304 1.27595 34.4531 1.25891 33.8735 1.35624C33.775 1.37327 33.6811 1.40734 33.5894 1.44384C33.4382 1.5071 33.3397 1.61902 33.2893 1.7869C33.2252 2.00345 33.1931 2.22731 33.1702 2.45359C33.1015 3.11541 33.1198 3.77965 33.1152 4.33441Z" fill="#303133"/>
                <path d="M18.3103 11.8623C16.9885 8.79414 15.6873 5.77704 14.3884 2.75994C14.3723 2.76237 14.3563 2.76481 14.3426 2.76724C14.3288 2.99596 14.3082 3.22224 14.299 3.45096C14.2441 4.85245 14.196 6.25151 14.1387 7.653C14.1112 8.30751 14.0791 8.96446 14.0677 9.62141C14.0631 9.91582 14.0883 10.2029 14.157 10.4876C14.299 11.0862 14.6289 11.4949 15.2154 11.6361C15.2452 11.6434 15.2772 11.6458 15.3047 11.658C15.3574 11.6799 15.3597 11.7285 15.3574 11.7796C15.3551 11.8502 15.3116 11.8502 15.2612 11.8429C14.929 11.7918 14.59 11.7942 14.2578 11.7601C13.6828 11.6993 13.1147 11.7601 12.5442 11.8064C12.4068 11.8185 12.2716 11.8331 12.1342 11.8453C12.0884 11.8502 12.038 11.8575 12.0219 11.7942C12.0059 11.7261 12.0173 11.6677 12.0929 11.6385C12.7413 11.3927 13.007 10.8258 13.1742 10.1762C13.2727 9.79903 13.3163 9.41216 13.3323 9.02529C13.3735 8.11043 13.401 7.19557 13.4377 6.28071C13.4927 4.90355 13.5453 3.52881 13.6118 2.15165C13.6255 1.88644 13.566 1.6918 13.3781 1.51174C13.0643 1.2149 12.7138 0.998349 12.3197 0.854794C12.2396 0.825596 12.1594 0.806126 12.0792 0.776928C12.0128 0.75503 12.0128 0.694206 12.0196 0.635811C12.0288 0.570116 12.0746 0.570112 12.125 0.577412C12.8237 0.667438 13.527 0.660142 14.228 0.696639C14.3609 0.703939 14.409 0.779364 14.4571 0.888855C14.748 1.5677 15.0436 2.24412 15.3368 2.92053C15.9118 4.25389 16.4891 5.58483 17.0641 6.91819C17.6048 8.17126 18.1431 9.4219 18.6883 10.6725C18.7456 10.8015 18.7502 10.9085 18.686 11.0375C18.5532 11.2905 18.4478 11.5485 18.3103 11.8623Z" fill="#303133"/>
                <path d="M51.948 6.22327C51.948 7.94836 51.948 9.67346 51.948 11.401C51.948 11.457 51.9457 11.5154 51.948 11.5713C51.9549 11.6808 51.9228 11.7392 51.8083 11.7343C51.2791 11.7124 50.7591 11.8122 50.2345 11.8511C50.097 11.8609 49.9596 11.8609 49.8221 11.8609C49.7717 11.8609 49.7351 11.8365 49.7282 11.7781C49.7213 11.7149 49.7351 11.6662 49.8015 11.6516C49.8244 11.6467 49.8473 11.6443 49.8679 11.637C50.42 11.491 50.7682 11.1163 50.9492 10.5543C51.0638 10.199 51.1073 9.82918 51.1256 9.45691C51.1439 9.126 51.1417 8.79267 51.1439 8.46176C51.1462 6.76099 51.1439 5.06022 51.1439 3.35702C51.1439 2.88499 51.1027 2.42026 50.9561 1.97013C50.7682 1.38861 50.4155 0.984702 49.8542 0.799783C49.8244 0.79005 49.7923 0.787621 49.7671 0.773022C49.719 0.746257 49.719 0.692727 49.7259 0.644064C49.7328 0.578369 49.7763 0.578367 49.8267 0.5808C50.2597 0.614864 50.6926 0.648928 51.1279 0.678126C51.3478 0.692725 51.57 0.70246 51.79 0.704893C51.9068 0.707326 51.948 0.753554 51.9457 0.880078C51.9412 1.33264 51.9434 1.78764 51.9434 2.24021C51.948 3.56627 51.948 4.89477 51.948 6.22327Z" fill="#303133"/>
                <path d="M44.3207 6.21581C44.3207 4.49801 44.3207 2.77778 44.3207 1.05998C44.3207 1.00402 44.3185 0.945626 44.3207 0.889664C44.3253 0.716911 44.3253 0.714476 44.4903 0.712043C44.9187 0.707177 45.3448 0.697444 45.7709 0.651215C45.961 0.631749 46.1511 0.607417 46.339 0.583085C46.3871 0.578219 46.4352 0.570924 46.4444 0.636619C46.4535 0.692582 46.4512 0.753405 46.3848 0.777737C46.3413 0.792336 46.2955 0.802073 46.2542 0.819105C45.8052 0.996724 45.496 1.32033 45.3379 1.80453C45.1844 2.27899 45.1386 2.77292 45.1317 3.26684C45.1157 4.51505 45.1225 5.76325 45.1202 7.01146C45.1202 7.69274 45.1203 8.37402 45.1225 9.0553C45.1248 9.49326 45.1661 9.92879 45.2669 10.357C45.4089 10.9604 45.764 11.3644 46.2932 11.6101C46.3207 11.6223 46.3504 11.632 46.3779 11.6442C46.4512 11.6758 46.4558 11.7391 46.4398 11.8047C46.4238 11.8704 46.3711 11.8534 46.3275 11.8485C45.9266 11.7926 45.5211 11.7731 45.118 11.7537C44.9049 11.7439 44.6896 11.7342 44.4765 11.739C44.3574 11.7415 44.3162 11.6953 44.3184 11.5712C44.323 11.2865 44.3207 11.0042 44.3207 10.7196C44.3207 9.21588 44.3207 7.71706 44.3207 6.21581Z" fill="#303133"/>
                <path d="M43.6084 6.21257C43.6084 7.962 43.6084 9.71386 43.6084 11.4633C43.6084 11.7553 43.6198 11.7261 43.3656 11.7334C42.7928 11.748 42.2224 11.7966 41.652 11.8429C41.5947 11.8477 41.5214 11.8842 41.4985 11.7918C41.4779 11.7115 41.5077 11.6555 41.5901 11.6263C42.3232 11.3781 42.5958 10.7674 42.7035 10.0253C42.7768 9.51191 42.8043 8.99365 42.8043 8.47539C42.8043 6.79896 42.8043 5.12008 42.8043 3.44365C42.8043 2.93269 42.7676 2.42416 42.6371 1.9278C42.4904 1.37061 42.1674 0.993474 41.652 0.806122C41.6222 0.796389 41.5924 0.789088 41.5649 0.779355C41.5008 0.757457 41.4916 0.703925 41.4985 0.643097C41.5077 0.562803 41.5603 0.570107 41.6176 0.574973C42.0048 0.609037 42.3919 0.643099 42.7814 0.669864C43.0105 0.686896 43.2396 0.696629 43.4663 0.701496C43.574 0.703929 43.6198 0.747722 43.6107 0.86208C43.6061 0.918042 43.6107 0.976437 43.6107 1.0324C43.6084 2.76237 43.6084 4.48747 43.6084 6.21257Z" fill="#303133"/>
                <path d="M66.8387 6.23068C66.8387 7.94848 66.8387 9.66628 66.8387 11.3841C66.8387 11.44 66.841 11.4984 66.8387 11.5544C66.8341 11.7271 66.8319 11.7345 66.6692 11.732C66.2637 11.7247 65.8605 11.7442 65.4573 11.7855C65.2672 11.805 65.077 11.8245 64.8869 11.8439C64.8411 11.8488 64.7907 11.8658 64.7747 11.8001C64.7586 11.732 64.7655 11.6688 64.8411 11.642C64.848 11.6396 64.8548 11.6371 64.8617 11.6347C65.5673 11.3938 65.8353 10.7977 65.9476 10.0896C65.9957 9.7782 66.014 9.46189 66.0209 9.14558C66.0507 7.19177 66.0346 5.24039 66.0323 3.28657C66.0323 2.8632 65.9957 2.44471 65.8903 2.03594C65.7437 1.45928 65.4276 1.04078 64.8938 0.824231C64.8663 0.812065 64.8342 0.804766 64.809 0.787734C64.7609 0.758536 64.7678 0.707439 64.7724 0.658776C64.7792 0.60768 64.8136 0.595514 64.8548 0.597948C64.9396 0.600381 65.0221 0.602814 65.1068 0.610113C65.6314 0.651477 66.156 0.705006 66.6829 0.707439C66.8021 0.707439 66.841 0.753671 66.8387 0.880195C66.8341 1.2768 66.8364 1.6734 66.8364 2.07244C66.8387 3.45933 66.8387 4.84378 66.8387 6.23068Z" fill="#303133"/>
                <path d="M25.882 11.8281C25.3414 11.7892 24.8007 11.7381 24.2601 11.7357C24.1432 11.7357 24.102 11.6919 24.0974 11.5678C24.0791 11.0325 24.047 10.4996 24.0264 9.96433C23.9714 8.63584 23.921 7.30977 23.8683 5.98128C23.8225 4.86446 23.7767 3.74765 23.7309 2.63084C23.708 2.06392 23.6759 1.49699 23.653 0.932502C23.6438 0.715952 23.6484 0.711086 23.8477 0.713519C24.4983 0.720819 25.1421 0.65269 25.7881 0.591862C25.8431 0.586996 25.9164 0.543195 25.937 0.642954C25.9553 0.730548 25.9141 0.774349 25.8316 0.793814C25.0481 0.971434 24.5991 1.7622 24.5625 2.55297C24.5418 3.02257 24.5533 3.49217 24.5785 3.96177C24.6014 4.39 24.6174 4.82066 24.6335 5.2489C24.6701 6.18809 24.6999 7.12729 24.7457 8.06648C24.7801 8.76236 24.7755 9.46067 24.9221 10.1444C24.9725 10.3828 25.0413 10.614 25.1421 10.833C25.3276 11.232 25.614 11.5045 26.0263 11.6164C26.063 11.6262 26.0996 11.6383 26.1386 11.6456C26.2119 11.6602 26.244 11.7065 26.2325 11.7843C26.2211 11.8646 26.1661 11.8573 26.1088 11.85C26.0332 11.8403 25.9576 11.833 25.882 11.8281Z" fill="#303133"/>
                <path d="M31.6202 6.24231C31.6202 7.95281 31.6202 9.66331 31.6202 11.3714C31.6202 11.42 31.6202 11.4687 31.6202 11.5174C31.6179 11.7291 31.6179 11.7339 31.4163 11.7315C30.8436 11.7242 30.2731 11.785 29.7027 11.8337C29.6798 11.8361 29.6569 11.8385 29.634 11.8385C29.5721 11.8361 29.4874 11.8896 29.4736 11.768C29.4645 11.6682 29.5355 11.6585 29.6042 11.6342C30.1197 11.459 30.4633 11.0989 30.6282 10.5465C30.7153 10.2594 30.7611 9.96259 30.7817 9.66574C30.8069 9.3032 30.8275 8.93824 30.8275 8.57326C30.8252 7.03308 30.8275 5.4929 30.8252 3.95272C30.8252 3.34443 30.8115 2.73858 30.7015 2.1376C30.5824 1.48551 30.2457 1.03538 29.65 0.813963C29.6202 0.804231 29.5928 0.792066 29.563 0.784767C29.492 0.765302 29.4622 0.714206 29.4759 0.638778C29.492 0.560917 29.5492 0.573083 29.6042 0.577949C29.9845 0.60958 30.3648 0.63878 30.7451 0.665545C30.9741 0.682577 31.2032 0.689876 31.43 0.702042C31.6156 0.711775 31.6179 0.711774 31.6179 0.913725C31.6202 1.83832 31.6179 2.76048 31.6179 3.68507C31.6202 4.53911 31.6202 5.39071 31.6202 6.24231Z" fill="#303133"/>
                <path d="M37.5098 1.10938C38.5429 1.42325 39.3241 2.50113 39.3997 3.64714C39.5005 5.18245 38.8087 6.21897 37.5579 6.79319C37.9656 6.2579 38.2864 5.67395 38.4215 4.9951C38.559 4.31139 38.5475 3.62768 38.3986 2.94883C38.252 2.26755 37.9496 1.669 37.5098 1.10938Z" fill="#303133"/>
                <path d="M57.8251 5.78258C58.6177 4.21564 58.6177 2.67059 57.7266 1.14258C58.5444 1.2764 59.3164 2.36645 59.337 3.38594C59.3599 4.55384 58.7116 5.59523 57.8251 5.78258Z" fill="#303133"/>
            </svg>
            <h3>Не знаете что подарить?</h3>
            <p>Ответьте всего на несколько вопросов, <br/>а мы поможем найти подарок, который <br/>не разочарует вашего получателя</p>
            <a href="#" class="main-btn">Подобрать подарок</a>
        </div>
        <img src="/i/home/item_img.png" alt="" class="item_img"/>
    </div>

    <div class="compilation">
        <h2>Мы подготовили для вас интересную подборку, посмотрите поближе</h2>
        <div class="product">
            <div class="content">
                <img src="/i/home/swiper_img.png" alt=""/>
                <p class="name">Картина «Сакские предания»</p>
                <p class="price">4 350 ₸</p>
                <div class="count">
                    <div class="quantity">
                        <p>-</p>
                        <p>1</p>
                        <p>+</p>
                    </div>
                    <a href="#" class="main-btn">В корзину</a>
                </div>
            </div>
            <div class="info">
                <p>Основой создания коллекции послужили уникальные археологические находки скифо-сакской культуры, представляющие собой квинтэссенцию.</p>
                <p>Полистоун • Ручная роспись</p>
            </div>
        </div>
    </div>

    <div class="consultaion">
      <div class="call">
        <h1>Нужна помощь ?</h1>
        <p>Оставьте свой номер для связи с консультантом.<br/>Или поищите ответ на свой вопрос в <a href="#">разделе FAQ.</a></p>
        <form method="POST" action="#">
          <input type="tel" name="phone" placeholder="Номер телефона"/>
          <button type="submit" class="main-btn">Заказать консультацию</button>
        </form>
      </div>
    </div>
    <div class="collab">
        <div class="title">
            <h3>Мы открытые сотрудничеству <br/>с компаниями на взаимовыгодной основе</h3>
            <p>Особые условия для корпоративных и оптовых клиентов</p>
            <a href="#" class="main-btn">Узнать больше</a>
        </div>
        <img src="/i/home/collab_img.png" alt="" class="collab_img"/>
    </div>
@endsection

{{--@section('scripts')--}}
{{--    <script src="https://empire.duketech.kz/collection/1/?id=11"> </script>--}}
{{--@endsection--}}
