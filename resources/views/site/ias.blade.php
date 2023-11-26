 @extends('layouts.header')
 @section('content')
     <div class="page-heading">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 align-self-center">
                     <div class="caption  header-text">
                         <h6>Tendências & Novidades
                             No Mundo Da Programação </h6>
                         <div class="line-dec"></div>
                         <h4> <em>Inteligência Artificial </em>em Jogos</h4>
                         <p>Revolução da IA nos Jogos: Inovações do ano! Explore como a inteligência artificial está
                             transformando a indústria de jogos, melhorando a jogabilidade, gráficos e interações. Descubra
                             as tendências que estão moldando o futuro dos jogos e preparando o terreno para uma nova era de
                             experiências envolventes.</p>
                         <div class="line-dec"></div>
                     </div>
                 </div>
                 <div class="col-lg-5 align-self-center">
                     <img src="{{ asset('template/assets/images/about-us-image.png') }}" alt="">
                 </div>
             </div>
         </div>
     </div>
     <div class="happy-clients ">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-heading">
                         <h2><em>A Inteligência Artificial mudará os games?</em> <span> Falamos com especialistas e alguns
                                 são
                                 mais céticos do que você pensa</span></h2>
                         <div class="line-dec"></div>
                         <p> Tudo o que todos querem falar na indústria de games é IA (inteligência artificial ou ainda AI,
                             que é sigla em inglês).
                             A tecnologia - que já foi um brilho nos olhos dos escritores de ficção científica e futuristas
                             - decolou como um foguete.
                             Todos os dias somos recebidos com novos avanços fascinantes e perturbadores no aprendizado de
                             máquinas.
                             No momento, você pode conversar com seu computador no ChatGPT, imitar a voz de uma celebridade
                             com o ElevenLabs e gerar arte conceitual com o MidJourney.
                             Talvez seja apenas uma questão de tempo até que a IA comece a fazer progressos significativos
                             no negócio de desenvolvimento de jogos, então,
                             para começar a semana da IA do IGN, conversamos com vários especialistas da área sobre as
                             esperanças e medos para este admirável mundo novo - e alguns são mais céticos do que você
                             imagina.
                         </p>
                     </div>
                 </div>
                 <!-- Adicionando informações sobre a Web 3.0 -->

                 <div class="container">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="section-heading">
                                 <h2><em>Qual você acha que a tecnologia de IA de maior impacto terá na indústria de
                                         videogames?</em></h2>
                                 <div class="line-dec"></div>
                                 <p><b>Pawel Sasko, Designer chefe de quests da CD Projekt Red:</b> Eu realmente
                                     acredito que a IA e as ferramentas de IA serão exatamente as mesmas de quando o
                                     Photoshop foi inventado.
                                     Você pode ver isso ao longo da história da animação. Do desenho à mão ao desenho no
                                     computador, as pessoas tiveram que se adaptar e usar as ferramentas, e acho que a
                                     IA será exatamente isso.
                                     Será apenas mais uma ferramenta que usaremos para produtividade e desenvolvimento
                                     de jogos.
                                     <br><b>Tim Sweeney, CEO da Epic Games:</b> Acho que há um longo processo de seleção
                                     para descobrir como tudo isso funciona e vai ser complicado.
                                     Essas tecnologias de IA são incrivelmente eficazes quando aplicadas a algumas
                                     formas de dados realmente em massa, nas quais você pode baixar bilhões de amostras
                                     de projetos existentes e treiná-las, mas isso funciona para texto e gráficos e
                                     talvez funcione para objetos 3D também,
                                     mas não funcionará para construções de nível superior, como um game todo.
                                     Simplesmente não há função de treinamento que as pessoas conheçam que possa
                                     conduzir um feito como esse.
                                     Acho que vamos ver alguns avanços realmente incríveis e progresso real misturados
                                     com o ciclo de hype, onde muitas coisas malucas são prometidas. Ninguém vai
                                     conseguir entregar.
                                     <br><b>Michael Spranger, COO da Sony AI:</b> Acho que a IA vai revolucionar a
                                     grandeza dos mundos dos games; quão reais eles parecem e como você interage com
                                     eles.
                                     Mas também acho que terá um grande impacto nos ciclos de produção. Especialmente
                                     nesta era de live-services. Vamos produzir muito mais conteúdo do que no passado.
                                     <br><b>Julian Togelius, Professor Associado de Ciência da Computação na
                                         Universidade de Nova York e co-autor do livro Artificial Intelligence and
                                         Games:</b>
                                     No longo prazo, veremos cada parte do desenvolvimento de jogos co-criados por
                                     designers em colaboração com AI em tudo, desde prototipagem, arte conceitual,
                                     mecânica, balanceamento e assim por diante.
                                     Mais adiante, poderemos ver jogos que são realmente projetados para usar IA durante
                                     o tempo de execução.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="container">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="section-heading">
                                 <h2><em>A maioria das pessoas tende a pensar em IA através do prisma de ferramentas visuais
                                         como MidJourney e Dall-E, mas como você espera que a tecnologia afete o
                                         desenvolvimento de games de maneiras mais ocultas? Como, digamos, som, animação ou
                                         otimização?</em></h2>
                                 <div class="line-dec"></div>
                                 <p><b> Sasko:</b> Na verdade, existem muitas empresas fazendo P&D interno de uma
                                     implementação específica não do MidJourney especialmente, mas literalmente apenas
                                     ferramentas de arte como esta, para que, quando você estiver nas fases iniciais do
                                     conceito, seja capaz de gerar o máximo de ideias possível e basicamente escolher o
                                     que realmente funciona para você e, em seguida, entregá-lo a um artista que
                                     realmente desenvolveu essa direção. Eu acho que é uma direção bastante intrigante
                                     porque abre as portas que você nem pensaria. E, novamente, como artista, estamos
                                     sempre limitados por nossas habilidades que surgem de todas as experiências de vida
                                     e tudo o que consumimos artisticamente, culturalmente antes. E a IA não tem essa
                                     limitação de forma alguma. Podemos alimentá-lo com tantas coisas diferentes,
                                     portanto, ele pode realmente propor tantas coisas diferentes nas quais nem
                                     pensaríamos. Então, acho que como ponto de partida ou talvez apenas como uma
                                     ferramenta de brainstorming, isso pode ser interessante.

                                     <br><b> Spranger:</b> Eu penso na IA como uma ferramenta de desbloqueio da
                                     criatividade. Há muito mais coisas que você pode fazer se tiver as ferramentas
                                     certas. Vemos uma rápida implantação do impacto dessa tecnologia nas possibilidades
                                     de criação de conteúdo em 3D, som, experiências musicais e com o que você está
                                     interagindo em um mundo. Tudo isso vai melhorar muito.

                                     <br><b>Julian Togelius:</b> Todo mundo olha para a geração de imagem e geração de
                                     texto e diz: 'Ei, podemos simplesmente colocar isso nos jogos'. E, é claro, vemos
                                     uma proliferação de pessoas que não estão nisso a série ou até de capital de risco,
                                     às vezes, descobrindo que os artistas chegam e afirmam que farão todas as artes do
                                     game com o MidJourney -- essas pessoas geralmente não sabem nada sobre
                                     desenvolvimento de jogos. Há muito disso por aí. Então eu gosto de dizer que gerar
                                     apenas uma imagem é a parte mais fácil. Todas as outras partes do conteúdo do game,
                                     incluindo a arte, têm muitos aspectos funcionais. O modelo de personagem deve
                                     funcionar com animações, o nível deve ser completável. Essa é a parte ruim.

                                     <br><b> Sweeney:</b> Não é sintetizar coisas novas incríveis, é apenas reescrever
                                     dados que já existem. Então, ou você pede para escrever um algoritmo de
                                     classificação em Python e ele faz isso, mas na verdade está apenas copiando a
                                     estrutura do código de outra pessoa que treinou. Você diz a ele para resolver um
                                     problema que ninguém resolveu antes ou os dados que ele não viu antes e ele não tem
                                     a menor ideia do que fazer a respeito. Não temos nada como inteligência geral
                                     artificial. Os personagens de arte gerados têm seis ou sete dedos, eles
                                     simplesmente não sabem que as pessoas têm cinco dedos. Eles não sabem o que são
                                     dedos e não sabem contar. Eles realmente não sabem nada além de como remontar
                                     pixels de uma maneira estatisticamente comum. E então, acho que estamos muito longe
                                     disso, fornecendo o tipo de utilidade que um verdadeiro artista oferece.

                                     <br><b>Sarah Bond, chefe de desenvolvimento e parceria global de jogos do Xbox:</b>
                                     Estamos nos primeiros dias disso. Obviamente, estamos no meio de grandes avanços.
                                     Mas você pode ver como isso aumentará muito a capacidade de descoberta que é
                                     realmente personalizada para o que realmente importa para você. Você pode realmente
                                     ter coisas servidas para você que são muito, muito orientadas pela IA. "Oh meu
                                     Deus, adorei o Tunic. O que devo fazer a seguir?".
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="container">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="section-heading">
                                 <h2><em>Várias pessoas levantaram questões sobre como o uso de IA interage com a lei de
                                         direitos autorais e o mercado de trabalho para artistas. O que vocês pensam sobre
                                         essas preocupações?</em></h2>
                                 <div class="line-dec"></div>
                                 <p><b>Tim Sweeney:</b> Ainda não tenho certeza. É engraçado, estamos empurrando o
                                     estado da arte em várias áreas diferentes, mas (a Epic) realmente não foca em IA
                                     generativa. Estamos surpresos com o que nossos próprios artistas fazem nos projetos
                                     de hobby, mas todas essas ferramentas de IA, o uso de dados está na sombra, o que
                                     torna as ferramentas inutilizáveis por empresas com advogados essencialmente porque
                                     não sabemos quais reivindicações de autoria podem existir nos dados.

                                     <br><b>Julian Togelius:</b> Não acho que afetará ninguém mais do que qualquer outra
                                     tecnologia que obrigue as pessoas a aprender novas ferramentas. Você tem que
                                     continuar aprendendo novas ferramentas ou se tornará irrelevante. As pessoas se
                                     tornarão mais produtivas e gerarão interações mais rápidas. Alguém dirá: "Ei, esta
                                     é uma criatura realmente interessante que você criou, agora me dê 10.000 dessas que
                                     diferem ligeiramente". As pessoas vão dominar as ferramentas. Eu não acho que eles
                                     vão tirar o emprego de alguém, desde que você continue na luta.

                                     <br><b>Pawel Sasko:</b> Eu acho que a esfera jurídica vai alcançar a geração de IA
                                     eventualmente, com o que fazer nessas situações para regulá-las. Sei que muitos
                                     dubladores estão preocupados com a tecnologia, pois a voz também é um elemento
                                     distinto de um determinado ator, não apenas a aparência e a forma de atuar. A lei
                                     está sempre atrás de nós.

                                     <br><b>Michael Spranger:</b> O relacionamento com pessoas criativas é muito
                                     importante para nós. Acho que essa relação não vai mudar. Quando vou assistir a um
                                     filme de Stanley Kubrick, estou lá para curtir a visão criativa dele. Para nós, é
                                     importante garantir que essas pessoas possam preservar e executar essas visões
                                     criativas e que a tecnologia de IA seja uma ferramenta que pode ajudar a fazer isso
                                     acontecer.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="container">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="section-heading">
                                 <h2><em>Você acha que a IA vai democratizar o desenvolvimento de games para estúdios
                                         independentes que não têm os mesmos recursos que as publishers triple A?</em></h2>
                                 <div class="line-dec"></div>
                                 <p><b>Julian Togelius:</b> Com certeza. Se você tem uma equipe com profundo
                                     conhecimento em todos os campos, você está em vantagem. Mas acho que chegaremos ao
                                     ponto em que você só precisa conhecer alguns campos para fazer um jogo e fazer com
                                     que as ferramentas de IA sejam posições não humanas para outros campos de
                                     especialização. Se você é uma equipe de duas pessoas e não tem um animador, pode
                                     pedir à IA para fazer a animação para você. O estúdio pode fazer um jogo bonito
                                     mesmo que não tenha todos os recursos. Isso é algo sobre o qual estou super
                                     otimista.

                                     <br><b>Tim Sweeney:</b> Acho que o caso mais comum, que vemos na indústria com
                                     frequência, é que um artista faz muito trabalho para construir um ativo incrível,
                                     mas os sistemas procedurais, as ferramentas de animação e os sistemas de
                                     digitalização de dados atrapalham tudo.

                                     <br><b>Michael Spranger:</b> A ciência da computação em geral tem um efeito muito
                                     democratizante. Essa é a história do campo. Acho que essas ferramentas podem
                                     inspirar mais pessoas a expressar a própria criatividade. Isso é realmente sobre
                                     capacitar as pessoas. Vamos criar muito mais conteúdo com IA e acho que isso terá
                                     um papel tanto em estúdios maiores quanto menores.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>


                 <div class="container">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="section-heading">
                                 <h2><em> jogadores tendem a ser céticos sobre os ciclos de hype da tecnologia. O que você
                                         acha que torna o boom da IA diferente de, digamos, integração NFT, ou o metaverso,
                                         ou televisões 3D, ou outras modas que passaram pela indústria no passado?</em></h2>
                                 <div class="line-dec"></div>
                                 <p><b>Michael Spranger:</b> Acho que o que torna isso diferente é que a prova está na
                                     nossa cara. Veja o que Kazunori Yamuchi disse sobre o GT Sophy, (piloto de
                                     inteligência artificial introduzido recentemente no Gran Turismo 7): houve um
                                     período de 25 anos em que eles construíram a IA no Gran Turismo de uma maneira
                                     específica, e Yamuchi está basicamente dizendo que este é um novo capítulo. Isso
                                     faz diferença para mim. Quando as pessoas dizem: "Nunca tive essa experiência antes
                                     com um jogo. Isso é qualitativamente diferente". Isto está aqui agora, você pode
                                     experimentá-lo agora.

                                     <br><b>Kajetan Kasprowicz, Designer de Cinemática da CD Projekt Red:</b> Certa vez,
                                     alguém na GDC deu uma palestra que basicamente dizia: "Quem vai querer jogar games
                                     feitos por IA?" As pessoas vão querer experiências criadas por seres humanos. A
                                     tecnologia está avançando muito rápido e meio que não sabemos o que fazer com ela.
                                     Mas acho que haverá um consenso sobre o que queremos fazer como sociedade.

                                     <br><b>Julian Togelius:</b> A IA tem casos de uso reais e funciona, enquanto toda a
                                     merda de criptografia foi ridícula por pessoas sem vergonha. Eu odeio que as
                                     pessoas associem IA a essa tendência. Por outro lado, você tem algo como VR, que é
                                     uma tecnologia interessante que pode, ou não, estar pronta para o mercado de massa
                                     algum dia. Compare isso com a IA, que tem centenas de casos de uso em games e no
                                     desenvolvimento deles.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>


                 <div class="container">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="section-heading">
                                 <h2><span>10 principais tendências de desenvolvimento web para 2023</span></h2>
                                 <div class="line-dec"></div>
                                 <p>Pensando na questão do desenvolvimento da web 3.0, sua maior confiabilidade e
                                     usabilidade, vejamos aqui as 10 principais tendências para 2023 de desenvolvimento
                                     para essa geração da internet:</p>
                                 <br>
                                 <h3>Inteligência Artificial e Learn Machine</h3>
                                 <br>
                                 <p>Não tem como falar em internet em pleno 2023 sem colocar como prioridades a
                                     inteligência artificial (IA) e o Learn Machine (LM), não é mesmo?
                                     Você pode estar pensando: mas essas tecnologias já estão a muitos anos no mercado,
                                     não seria exatamente uma novidade.
                                     Na verdade, quando pensamos no desenvolvimento web, esses recursos encontrarão novo
                                     papel, permitindo que os desenvolvedores de software criem aplicações mais
                                     personalizadas e eficientes.
                                     Além disso, ferramentas baseadas em IA e LM são capazes de automatizar tarefas
                                     repetitivas, liberando os programadores para se concentrarem em problemas mais
                                     complexos.
                                     Pensando na usabilidade desses recursos para os usuários da ponta, a implementação
                                     de chatbots com inteligência artificial que utilizam modelos de aprendizado de
                                     máquina e processamento de linguagem natural serão os queridinhos da vez.
                                     Sem dúvidas, é esperado um maior nível de colaboração entre IA e humano na internet
                                     com a Web 3.0.</p>
                                 <br>
                                 <h3>Computação em nuvem</h3>
                                 <br>
                                 <p>A computação em nuvem vem ganhando o seu espaço tanto a nível doméstico quanto
                                     corporativo e é por isso que se espera que essa tendência continue em 2023.
                                     Para os desenvolvedores de software, a computação em nuvem traz diversos
                                     benefícios, especialmente porque não é necessário se preocupar tanto com a
                                     infraestrutura do usuário.
                                     Afinal, as plataformas na nuvem podem operar com alta qualidade mesmo que os
                                     usuários não possuam dispositivos com tanta capacidade de processamento e memória.
                                     Além disso, a computação em nuvem permite uma maior colaboração e acesso mais fácil
                                     aos dados, tornando o processo de desenvolvimento de software mais eficiente. </p>
                                 <br>
                                 <h3>Desenvolvimento em Cloud, No-Code e Low-Code</h3>
                                 <br>
                                 <p>NAs plataformas de desenvolvimento de Low-Code e No-Code estão se tornando mais
                                     populares tendo em vista a maior facilidade para criar aplicações.
                                     Então, mesmo que o usuário não seja técnico, é possível desenvolver ferramentas sem
                                     a necessidade de escrever qualquer linha de código.
                                     Pensando no que falamos logo no início do artigo, com essa facilitação, o
                                     desenvolvimento web tende a se tornar mais acessível a um maior número de
                                     indivíduos.
                                     Sem dúvidas, é esperado um maior nível de colaboração entre IA e humano na internet
                                     com a Web 3.0.</p>
                                 <br>
                                 <h3>Desenvolvimento mobile</h3>
                                 <br>
                                 <p>Com o avanço da tecnologia dos smartphones e maior adoção dos mesmos pela população
                                     a nível mundial, o desenvolvimento mobile é uma tendência forte para 2023.
                                     O desenvolvimento mobile se trata de uma rotina de criação de soluções de TI
                                     voltadas para tablets, smartphones e outros dispositivos móveis.
                                     Aplicações como o WhatsApp, Uber, Telegram, iFood são serviços que trabalham com
                                     times de desenvolvimento que direcionam praticamente a totalidade de recursos para
                                     entregar funcionalidades adaptadas ao ambiente móvel.
                                     Atualmente, essa área da tecnologia é responsável por receitas bilionárias para
                                     quem trabalha com TI, além de ser o principal mecanismo de funcionamento de vários
                                     serviços.
                                     Isso acontece porque o usuário de smartphone é um potencial usuário de aplicativos
                                     e páginas web feitas para esse tipo de ferramenta.
                                     Ou seja, essa é uma área de alto potencial comercial, assim como o desenvolvimento
                                     de estratégias APIs.</p>
                                 <br>
                                 <h3>Integração de aplicativos móveis com outros dispositivos e plataformas</h3>
                                 <br>
                                 <p>Como citamos anteriormente, os dispositivos móveis estão se proliferando e quando
                                     falamos neles não nos restringimos somente a celulares e tablets.
                                     Em 2023 é muito provável que exista uma maior democratização de dispositivos
                                     domésticos inteligentes, vestíveis e assistentes de voz.
                                     Por meio dessas novas oportunidades com uma maior acessibilidade, a tendência é
                                     proporcionar novas oportunidades para integração desses aplicativos móveis.
                                     Com isso, os usuários podem ter um maior controle e gerenciamento dos seus
                                     dispositivos e sistemas por meio de seus dispositivos móveis.
                                     Consequentemente podem ser fornecidas novas experiências mais convenientes e
                                     integradas em seus dispositivos e plataformas conectados.</p>
                                 <br>
                                 <h3>Microservices</h3>
                                 <br>
                                 <p>CPara 2023 os microservices continuam como tendência tendo em vista os benefícios
                                     como a facilidade de escalabilidade e agilidade do desenvolvimento de aplicativos.
                                     Microservices é uma abordagem à arquitetura de software que envolve a quebra de uma
                                     aplicação em componentes menores e independentes.
                                     Através dessa metodologia os serviços se comunicam por meio de uma interface bem
                                     definida usando APIs leves.
                                     Dessa forma, como são executados de forma independente, cada serviço pode ser
                                     atualizado, implantado e escalado para atender a demanda de funções específicas de
                                     um aplicativo.
                                     Com isso, é possível ter um maior poder de inovação e acelerar o tempo de
                                     introdução de novos recursos no mercado.</p>
                                 <br>
                                 <h3>DevOps</h3>
                                 <br>
                                 <p>Uma maior colaboração e comunicação é pauta para o desenvolvimento web em 2023 e é
                                     por isso que o DevOps é uma grande tendência para esse ano.
                                     O DevOps se trata de um método de desenvolvimento de software que enfatiza essas
                                     características entre as equipes de desenvolvimento e operações.
                                     Por meio dessa maior interação, as equipes podem simplificar o processo de
                                     desenvolvimento e garantir que o software seja entregue com maior velocidade e
                                     qualidade.
                                     Basicamente, os desenvolvedores trabalham em estreita colaboração com a equipe de
                                     operações de TI para acelerar a compilação de programas de software.
                                     Além disso, nesse sistema é possível realizar testes e o lançamento de soluções,
                                     sem sacrificar a confiabilidade.
                                     A filosofia do DevOps nos mostra a importância de acelerar os processos para ter um
                                     ambiente de produção capaz de gerar valor para o usuário.
                                     Dessa forma, através do DevOps os usuários que mais precisam de recursos conseguem
                                     obtê-los por meio do autosserviço e da automação. </p>
                                 <br>
                                 <h3>Tecnologia blockchain</h3>
                                 <br>
                                 <p>Com o crescimento e popularização dos NTFs e criptomoedas, a tecnologia Blockchain
                                     está se tornando mais difundida e pretende invadir o desenvolvimento web a partir
                                     de 2023.
                                     A tecnologia Blockchain não está mais relacionada apenas às criptomoedas, mas se
                                     tornou um sistema de computação em nuvem verdadeiramente distribuído.
                                     Dessa forma, é possível executar Backends completos para alimentar Aplicações
                                     Descentralizadas (DApps) de ponta, protegendo os dados e criando registros à prova
                                     de adulteração. </p>
                                 <br>
                                 <h3>Realidade virtual e aumentada</h3>
                                 <br>
                                 <p>O Metaverso traz à tona uma tecnologia que vinha ainda muito tímida nos últimos
                                     anos: a realidade virtual e aumentada.
                                     Para além da utilização dos usuários finais, a realidade virtual e aumentada é uma
                                     tendência para o desenvolvimento web, permitindo experiências mais imersivas e
                                     interativas.
                                     Por meio desses recursos, os desenvolvemos podem criar simulações de treinamento,
                                     experiências de jogos e visitas virtuais. </p>
                                 <br>
                                 <h3>Segurança cibernética</h3>
                                 <br>
                                 <p>Mais do que possuir novas tecnologias que agilizam os processos e facilitam a
                                     utilização da web, a segurança ainda deve ser uma prioridade em 2023.
                                     Em uma Era em que os avanços e descobertas da tecnologia são absurdamente rápidas,
                                     a segurança cibernética tornou-se imprescindível para garantir a proteção das
                                     informações.
                                     Nessa realidade, os desenvolvedores web precisam se ater a medidas e soluções da
                                     segurança cibernética que protegem todas as categorias de dados contra roubo e
                                     danos.
                                     Sem a existência da segurança cibernética, seria impossível proteger os dados
                                     confidenciais e pessoais</p>
                             </div>
                         </div>
                     </div>
                 </div>
             @endsection
