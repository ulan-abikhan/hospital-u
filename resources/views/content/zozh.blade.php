@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">

                <h4 class="card-header">Здоровый образ жизни</h4>

                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img style="max-width:100%;" src="{{ asset('assets/img/backgrounds/zozh.jpeg') }}" alt="user-avatar"
                            class="d-block w-px-240 h-px-240 rounded" id="uploadedAvatar" />
                    </div>
                </div>

                <div class="card-body pt-2 mt-1">

                    <p>
                        Здоровый образ жизни(ЗОЖ): Ключ к здоровью сердца
                        <br>
                        <br>

                        Здоровье сердца играет важнейшую роль в нашей жизни. Сердце является нашим национальным
                        биологическим мотором, который обеспечивает кровоснабжение всего организма. Оно работает непрерывно,
                        без выходных и перерывов. Поэтому поддержание здоровья сердца и сосудов является фундаментальной
                        задачей для всех нас. Один из самых эффективных способов обеспечить здоровье вашего сердца - это
                        соблюдение здорового образа жизни, или ЗОЖ.
                        <br>
                        <br>



                        Что такое ЗОЖ?
                        <br>

                        ЗОЖ, или здоровый образ жизни, представляет собой комплекс мероприятий и привычек, направленных на
                        поддержание и укрепление вашего здоровья. Этот подход включает в себя несколько ключевых аспектов:

                        <br>
                        <br>


                        Правильное питание: Сбалансированное питание играет важную роль в поддержании здоровья сердца.
                        Избегайте избытка жира, сахара и соли в вашей диете. Предпочтение следует отдавать свежим овощам и
                        фруктам, нежирным молочным продуктам, орехам и рыбе. Умеренное потребление мяса также важно.

                        <br>
                        <br>

                        Физическая активность: Регулярные физические нагрузки способствуют укреплению сердца и сосудов. Даже
                        простая ходьба в течение 30 минут каждый день может принести огромную пользу вашему
                        сердечно-сосудистому здоровью.
                        <br>
                        <br>



                        Отказ от вредных привычек: Курение и употребление алкоголя считаются основными факторами риска для
                        заболеваний сердца. Отказ от этих привычек - один из самых важных шагов на пути к ЗОЖ.

                        <br>
                        <br>


                        Регулярные медицинские осмотры: Проведение регулярных медицинских осмотров позволяет выявить
                        проблемы с сердцем на ранних стадиях и принять необходимые меры.


                        <br>
                        <br>

                        ЗОЖ и сердце: Взаимосвязь


                        <br>
                        <br>

                        Соблюдение ЗОЖ имеет непосредственное воздействие на здоровье сердца и сосудов:

                        <br>


                        Снижение риска болезней сердца: ЗОЖ помогает снизить вероятность развития таких сердечно-сосудистых
                        заболеваний, как артериальная гипертензия (повышенное давление), атеросклероз (отложение холестерина
                        на стенках артерий), ишемическая болезнь сердца (сужение коронарных артерий).


                        <br>

                        Улучшение состояния сосудов: Правильное питание и активный образ жизни способствуют укреплению
                        стенок сосудов, что снижает риск образования тромбов и разрывов сосудов.


                        <br>

                        Контроль уровня холестерина: ЗОЖ помогает поддерживать здоровый уровень холестерина в крови, что
                        является ключевым фактором для профилактики атеросклероза.

                        <br>


                        Улучшение физической выносливости: Регулярные тренировки укрепляют сердечную мышцу, повышая ее
                        эффективность и способность к переносу нагрузок.

                        <br>


                        Здоровое питание
                        <br>

                        Основные факты
                        <br>

                        Здоровое питание обеспечивает защиту от неправильного питания во всех его формах, а также от
                        неинфекционных заболеваний (НИЗ), включая диабет, болезни сердца, инсульт и рак.
                        Нездоровое питание и отсутствие физической активности являются основными рисками для здоровья во
                        всем мире.
                        Практика здорового питания формируется на ранних этапах жизни ― грудное вскармливание способствует
                        здоровому росту и улучшает когнитивное развитие и может оказывать благотворное воздействие на
                        здоровье в длительной перспективе, например снижает вероятность набора избыточного веса или ожирения
                        и развития НИЗ позднее в жизни.
                        Потребление энергии (калорий) должно быть сбалансировано с ее расходом. Во избежание нездоровой
                        прибавки веса общее потребление жиров не должно превышать 30% от общей потребляемой энергии (1, 2,
                        3). Насыщенные жиры должны составлять менее 10%, а трансжиры – менее 1% от общей потребляемой
                        энергии, причем при потреблении жиров необходимо заменять насыщенные жиры и трансжиры ненасыщенными
                        жирами (3) и стремиться к исключению из рациона трансжиров промышленного производства (4, 5, 6).
                        Сокращение потребления свободных сахаров до менее 10% от общей потребляемой энергии (2, 7) является
                        частью здорового питания, а сокращение их потребления до менее 5% предположительно обеспечивает
                        дополнительные преимущества для здоровья (7).
                        Потребление соли на уровне менее 5 г в день (эквивалентно потреблению натрия на уровне менее 2 г. в
                        день) способствует профилактике гипертонии и снижает риск развития болезней сердца и инсульта среди
                        взрослого населения (8).
                        Государства-члены ВОЗ выдвинули цель по сокращению глобального потребления соли на 30% к 2025 г., а
                        также по прекращению увеличения числа случаев диабета и ожирения у взрослых людей и подростков и
                        избыточного веса у детей к 2025 г. (9, 10).


                        <br>
                        <br>


                        Здоровое питание на протяжении всей жизни способствует профилактике неправильного питания во всех
                        его формах, а также целого ряда неинфекционных заболеваний (НИЗ) и нарушений здоровья. Вместе с тем,
                        рост производства переработанных продуктов, быстрая урбанизация и изменяющийся образ жизни привели к
                        сдвигу в моделях питания. В настоящее время люди потребляют больше продуктов с высоким содержанием
                        калорий, жиров, свободных сахаров и соли/натрия, и многие люди не потребляют достаточно фруктов,
                        овощей и других видов клетчатки, таких как цельные злаки.
                        <br>

                        Точный состав разнообразного, сбалансированного и здорового питания зависит от индивидуальных
                        особенностей (таких как возраст, пол, образ жизни и степень физической активности), культурного
                        контекста, имеющихся местных продуктов и обычаев в области питания. Однако основные принципы
                        здорового питания остаются одинаковыми.
                        <br>

                        Для взрослых людей
                        <br>

                        Здоровое питание включает следующие компоненты:
                        <br>

                        Фрукты, овощи, бобовые (например, чечевица, фасоль), орехи и цельные злаки (например,
                        непереработанная кукуруза, просо, овес, пшеница и неочищенный рис).
                        По меньшей мере, 400 г (то есть пять порций) фруктов и овощей в день (2), кроме картофеля, сладкого
                        картофеля, маниока и других крахмалсодержащих корнеплодов.
                        Свободные сахара должны составлять менее 10% от общей потребляемой энергии (2, 7), что эквивалентно
                        50 г (или 12 чайным ложкам без верха) на человека с нормальным весом, потребляющего около 2000
                        калорий в день, но в идеале, в целях обеспечения дополнительных преимуществ для здоровья, они должны
                        составлять менее 5% от общей потребляемой энергии (7). Свободные сахара – это все сахара,
                        добавляемые в пищевые продукты или напитки производителем, поваром или потребителем, а также сахара,
                        естественным образом присутствующие в меде, сиропах, фруктовых соках и их концентратах.
                        Жиры должны составлять менее 30% от общей потребляемой энергии (1, 2, 3). Необходимо отдавать
                        предпочтение ненасыщенным жирам (содержащимся в рыбе, авокадо и орехах, а также в подсолнечном,
                        соевом, рапсовом и оливковом масле) в отличие от насыщенных жиров (содержащихся в жирном мясе,
                        сливочном масле, пальмовом и кокосовом масле, сливках, сыре, ги и свином сале) и трансжиров всех
                        видов, включая как трансжиры промышленного производства (содержащиеся в запеченных и жареных
                        продуктах, заранее упакованных закусочных и других продуктах, таких как замороженные пиццы, пироги,
                        печенье, вафли, кулинарные жиры и бутербродные смеси), так и трансжиры естественного происхождения
                        (содержащиеся в мясной и молочной продукции, получаемой от жвачных животных, таких как коровы, овцы,
                        козы и верблюды). Рекомендуется сократить потребление насыщенных жиров до менее 10% и трансжиров до
                        менее 1% от общей потребляемой энергии (5). Особенно следует избегать потребления трансжиров
                        промышленного производства, которые не входят в состав здорового питания (4, 6).
                        Потребление менее 5 г соли (эквивалентно примерно одной чайной ложке) в день (8). Соль должна быть
                        йодированной.
                        Для детей грудного и раннего возраста
                        <br>

                        Оптимальное питание на протяжение первых двух лет жизни способствует здоровому росту ребенка и
                        улучшает его когнитивное развитие. Оно также снижает риск набора избыточного веса и ожирения и
                        развития НИЗ позднее в жизни.
                        <br>

                        Рекомендации по здоровому питанию для грудных детей и детей других возрастных групп схожи с
                        рекомендациями для взрослых, но важны также следующие компоненты:
                        <br>

                        В течение первых 6 месяцев жизни дети должны находиться на исключительном грудном вскармливании.
                        Грудное вскармливание детей необходимо продолжать в течение первых двух лет жизни и позднее.
                        С шестимесячного возраста грудное молоко необходимо дополнять разнообразными надлежащими безопасными
                        и питательными продуктами. В прикорм не следует добавлять соль и сахар.
                        Практические рекомендации по поддержанию здорового питания
                        <br>

                        Фрукты и овощи
                        <br>

                        Ежедневное потребление, по меньшей мере, 400 г, или пяти порций, фруктов и овощей снижает риск
                        развития НИЗ (2) и помогает обеспечить ежедневное поступление клетчатки.
                        <br>

                        Потребление фруктов и овощей можно улучшить. Для этого необходимо:
                        <br>

                        всегда включать в рацион овощи;
                        употреблять в качестве закуски свежие фрукты и овощи;
                        потреблять сезонные фрукты и овощи; и
                        потреблять разнообразные фрукты и овощи.
                        Жиры
                        <br>

                        Снижение общего потребления жиров до менее 30% от общей потребляемой энергии помогает предотвратить
                        нездоровую прибавку веса у взрослых людей(1, 2, 3). Кроме того, риск развития НИЗ можно снизить
                        благодаря:
                        <br>

                        сокращению потребления насыщенных жиров до менее 10% от общей потребляемой энергии;
                        сокращению потребления трансжиров до менее 1% от общей потребляемой энергии; и
                        замещению насыщенных жиров и трансжиров ненасыщенными жирами (2, 3), в частности полиненасыщенными
                        жирами.
                        Потребление жиров, особенно насыщенных жиров и трансжиров промышленного производства, можно
                        сократить следующими путями:
                        <br>

                        готовить пищу на пару или варить, а не жарить и не запекать;
                        заменять сливочное масло, свиное сало и ги на растительные масла, богатые полиненасыщенными жирами,
                        такие как соевое, каноловое (рапсовое), кукурузное, сафлоровое и подсолнечное масло;
                        употреблять в пищу молочную продукцию со сниженным содержанием жиров и постное мясо или обрезать
                        видимый жир с мяса; и
                        ограничивать потребление запеченных и жареных продуктов, а также заранее приготовленных закусочных и
                        других продуктов (например, пончиков, кексов, пирогов, печенья и вафель), содержащих трансжиры
                        промышленного производства.
                        Соль, натрий и калий
                        <br>

                        Многие люди потребляют слишком много натрия, поступающего с солью (соответствует потреблению, в
                        среднем, 9-12 г соли в день), и недостаточно калия (менее 3,5 г). Высокий уровень потребления натрия
                        и недостаточное потребление калия способствуют повышению кровяного давления, что, в свою очередь,
                        повышает риск развития болезней сердца и инсульта (8, 11).
                        <br>

                        Сокращение потребления соли до рекомендуемого уровня, то есть до менее 5 г в день, могло бы
                        способствовать предотвращению 1,7 миллиона случаев смерти в год (12).
                        <br>

                        Люди зачастую не знают, какое количество соли они потребляют. Во многих странах основное количество
                        соли поступает в организм человека из переработанных продуктов (готовых блюд; мясопродуктов, таких
                        как бекон, ветчина и салями; сыра; и соленых закусок) или из пищевых продуктов, часто потребляемых в
                        больших количествах (например, хлеб). Соль также добавляют в пищу во время ее приготовления
                        (например, путем добавления бульона, бульонных кубиков, соевого соуса и рыбного соуса) или во время
                        еды (путем добавления столовой соли).
                        <br>

                        Потребление соли можно сократить следующими путями:
                        <br>

                        ограничить количество соли и приправ с высоким содержанием натрия (например, соевого соуса, рыбного
                        соуса и бульона), добавляемых во время приготовления еды;
                        не ставить на стол соль и соусы с высоким содержанием натрия;
                        ограничить потребление соленых закусок; и
                        выбирать продукты с низким содержанием натрия.
                        Некоторые производители пищевых продуктов изменяют состав своей продукции для снижения содержания
                        натрия, и перед приобретением или потреблением продуктов следует проверять маркировку на предмет
                        содержания в них натрия.
                        <br>

                        Калий может смягчать негативное воздействие избыточного потребления натрия на кровяное давление.
                        Поступление в организм калия можно увеличить путем потребления свежих фруктов и овощей.
                        <br>

                        Сахара
                        <br>

                        Потребление сахаров как среди взрослых людей, так и среди детей необходимо уменьшить до менее 10% от
                        общей потребляемой энергии (2, 7). Сокращение потребления до менее 5% от общей потребляемой энергии
                        обеспечит дополнительные преимущества для здоровья (7).
                        <br>

                        Потребление свободных сахаров повышает риск развития зубного кариеса. Избыточные калории,
                        поступающие вместе с едой и напитками, содержащими свободные сахара, способствуют также нездоровой
                        прибавке веса, что может приводить к избыточному весу и ожирению. Недавно получены фактические
                        данные, свидетельствующие о том, что свободные сахара оказывают воздействие на кровяное давление и
                        липиды сыворотки крови. Это позволяет предположить, что сокращение потребления свободных сахаров
                        способствует снижению рисков развития сердечно-сосудистых болезней (13).
                        <br>

                        Потребление сахаров можно сократить следующими путями:
                        <br>

                        ограничить потребление пищевых продуктов и напитков с высоким содержанием сахаров, таких как сладкие
                        закуски, конфеты и подслащенные напитки (то есть все типы напитков, содержащих свободные сахара,
                        которые включают газированные и негазированные прохладительные напитки, фруктовые и овощные соки и
                        напитки, жидкие и порошковые концентраты, воды со вкусовыми добавками, энергетические и спортивные
                        напитки, готовый чай, готовый кофе и молочные напитки со вкусовыми добавками); и
                        заменять сладкие закуски на свежие фрукты и овощи.
                        Как способствовать здоровому питанию?
                        <br>

                        Рацион питания меняется со временем под воздействием многих социальных и экономических факторов и
                        из-за их сложного взаимодействия, способствующего формированию индивидуальных моделей питания. Эти
                        факторы включают доход, цены на продукты питания (которые оказывают воздействие на наличие продуктов
                        питания и их доступность по стоимости), индивидуальные предпочтения и убеждения, культурные
                        традиции, а также географические и экологические аспекты (включая изменение климата). Поэтому к
                        формированию здоровой продовольственной среды ― включая продовольственные системы, способствующие
                        разнообразному, сбалансированному и здоровому питанию, ― необходимо привлекать многочисленные
                        сектора и заинтересованные стороны, в том числе правительства и государственный и частный сектора.
                        <br>

                        Правительства играют главную роль в формировании здоровой продовольственной среды, позволяющей людям
                        принимать и поддерживать практику здорового питания. Эффективные действия лиц, формирующих политику,
                        по созданию здоровой продовольственной среды включают следующие:
                        <br>

                        Обеспечение согласованности национальной политики и инвестиционных планов, в том числе в области
                        торговли, пищевой промышленности и сельского хозяйства, для содействия здоровому питанию и защиты
                        здоровья населения с помощью следующих мер:
                        усиление стимулов, побуждающих производителей и розничных торговцев выращивать, использовать и
                        продавать свежие фрукты и овощи;
                        стимулирование изменения состава пищевых продуктов для снижения содержания насыщенных жиров,
                        трансжиров, свободных сахаров и соли/натрия с целью исключения трансжиров промышленного производства
                        из состава пищевой продукции;
                        осуществление рекомендаций ВОЗ в отношении ориентированного на детей маркетинга пищевых продуктов и
                        безалкогольных напитков;
                        установление стандартов, способствующих практике здорового питания путем обеспечения наличия
                        здоровых, питательных, безопасных и доступных по стоимости пищевых продуктов в дошкольных
                        учреждениях, школах, других общественных учреждениях и на рабочих местах;
                        изучение нормативных и добровольных инструментов (например, правила маркетинга и политика в
                        отношении маркировки продуктов питания), а также экономических стимулов или сдерживающих факторов
                        (например, налогообложение и субсидии) для содействия здоровому питанию; и
                        стимулирование транснациональных, национальных и местных служб и предприятий общественного питания в
                        целях улучшения питательных качеств их продукции — обеспечения наличия вариантов здорового питания и
                        их доступности по стоимости — и пересмотра размера порций и цен на них.
                        Стимулирование потребительского спроса на здоровые пищевые продукты и блюда с помощью следующих мер:
                        повышение осведомленности потребителей о здоровом питании;
                        разработка школьных стратегий и программ, направленных на принятие и поддержание практики здорового
                        питания среди детей;
                        просвещение детей, подростков и взрослых в отношении практики здорового питания;
                        cодействие в развитии кулинарных навыков, в том числе у детей в рамках школьного обучения;
                        оказание поддержки для предоставления информации в пунктах продажи, в том числе с помощью
                        маркировки, содержащей точную, стандартизированную и всеобъемлющую информацию о содержании
                        питательных веществ в пищевых продуктах (в соответствии с руководящими принципами Комиссии по
                        Кодексу Алиментариус), и нанесения дополнительной маркировки на лицевую сторону упаковки, с тем
                        чтобы потребителям было проще понять эту информацию; и
                        консультирование по вопросам питания на уровне первичной медико-санитарной помощи.
                        Продвижение надлежащей практики кормления детей грудного и раннего возраста с помощью следующих мер:
                        осуществление Международного свода правил сбыта заменителей грудного молока и последующих
                        соответствующих резолюций Всемирной ассамблеи здравоохранения;
                        осуществление стратегий и практических методик для усиления защиты работающих матерей; и
                        продвижение, защита и поддержка грудного вскармливания в службах здравоохранения и на уровне
                        сообществ, в том числе в рамках Инициативы по созданию в больницах благоприятных условий для
                        грудного вскармливания.
                        <br>

                        Деятельность ВОЗ
                        <br>

                        В 2004 г. Ассамблея здравоохранения приняла «Глобальную стратегию ВОЗ по питанию, физической
                        активности и здоровью» (14). Стратегия призвала правительства, ВОЗ, международных партнеров, частный
                        сектор и гражданское общество к принятию мер на глобальном, региональном и местном уровнях для
                        содействия здоровому питанию и физической активности.
                        <br>

                        В 2010 г. Ассамблея здравоохранения одобрила ряд рекомендаций в отношении ориентированного на детей
                        маркетинга пищевых продуктов и безалкогольных напитков (15). С помощью этих рекомендаций страны
                        разрабатывают новые и улучшают существующие стратегии по уменьшению воздействия маркетинга
                        нездоровых пищевых продуктов на детей. ВОЗ также разработала инструменты для регионов (такие как
                        региональные типовые перечни питательных веществ), которыми страны могут пользоваться при
                        осуществлении рекомендаций по маркетингу.
                        <br>

                        В 2012 г. Ассамблея здравоохранения приняла «Всеобъемлющий план осуществления деятельности в области
                        питания матерей и детей грудного и раннего возраста» и шесть глобальных целей в области питания,
                        которые должны быть достигнуты к 2025 г., включая сокращение числа детей, страдающих от задержки
                        роста, истощения и избыточного веса, улучшение грудного вскармливания и сокращение числа детей с
                        анемией и низкой массой тела при рождении (9).
                        <br>

                        В 2013 г. Ассамблея здравоохранения согласовала девять глобальных добровольных целей по профилактике
                        НИЗ и борьбе с ними. Эти цели включают прекращение увеличения числа случаев диабета и ожирения и
                        относительное снижение на 30% потребления соли к 2025 году. «Глобальный план действий по
                        профилактике неинфекционных заболеваний и борьбе с ними на 2013-2020 гг.» (10) содержит руководство
                        и варианты политики для содействия государствам-членам, ВОЗ и другим учреждениям Организации
                        Объединенных Наций в достижении этих целей.
                        <br>

                        В мае 2014 г., принимая во внимание быстрый рост числа детей грудного возраста и других возрастных
                        групп с ожирением во многих странах, ВОЗ учредила Комиссию по ликвидации детского ожирения. В 2016
                        г. Комиссия предложила ряд рекомендаций для успешной борьбы с ожирением среди детей и подростков в
                        условиях разных стран мира (16).
                        <br>

                        В ноябре 2014 г. ВОЗ вместе с Продовольственной и сельскохозяйственной организацией ООН (ФАО)
                        организовала вторую Международную конференцию по вопросам питания (ICN2). ICN2 приняла Римскую
                        декларацию по вопросам питания (17) и Рамочную программу действий (18), которые содержат
                        рекомендации в отношении ряда вариантов политики и стратегий для содействия разнообразному,
                        безопасному и здоровому питанию на всех этапах жизни. ВОЗ помогает странам в выполнении
                        обязательств, принятых на ICN2.
                        <br>

                        В мае 2018 г. Ассамблея здравоохранения приняла тринадцатую Общую программу работы (ОПР13), которой
                        ВОЗ будет руководствоваться в своей работе в 2019—2023 гг. (19). Сокращение потребления соли/натрия
                        и исключение трансжиров промышленного производства из состава пищевой продукции определены в ОПР13 в
                        качестве приоритетных действий ВОЗ для достижения целей по обеспечению здорового образа жизни и
                        содействию благополучию для всех в любом возрасте. Для оказания содействия государствам-членам в
                        принятии необходимых мер для исключения трансжиров промышленного производства из состава пищевой
                        продукции ВОЗ разработала дорожную карту для стран (пакет мер REPLACE) в целях ускорения действий
                        (6).

                        <br>
                        <br>

                        Источники
                        <br>


                        (1) Hooper L, Abdelhamid A, Bunn D, Brown T, Summerbell CD, Skeaff CM. Effects of total fat intake
                        on body weight. Cochrane Database Syst Rev. 2015; (8):CD011834.
                        <br>

                        (2) Diet, nutrition and the prevention of chronic diseases: report of a Joint WHO/FAO Expert
                        Consultation. WHO Technical Report Series, No. 916. Geneva: World Health Organization; 2003.
                        <br>

                        (3) Fats and fatty acids in human nutrition: report of an expert consultation. FAO Food and
                        Nutrition Paper 91. Rome: Food and Agriculture Organization of the United Nations; 2010.
                        <br>

                        (4) Nishida C, Uauy R. WHO scientific update on health consequences of trans fatty acids:
                        introduction. Eur J Clin Nutr. 2009; 63 Suppl 2:S1–4.
                        <br>

                        (5) Guidelines: Saturated fatty acid and trans-fatty acid intake for adults and children. Geneva:
                        World Health Organization; 2018 (Draft issued for public consultation in May 2018).
                        <br>

                        (6) REPLACE: An action package to eliminate industrially-produced trans-fatty acids.
                        WHO/NMH/NHD/18.4. Geneva: World Health Organization; 2018.
                        <br>

                        (7) Guideline: Sugars intake for adults and children. Geneva: World Health Organization; 2015.
                        <br>

                        (8) Guideline: Sodium intake for adults and children. Geneva: World Health Organization; 2012.
                        <br>

                        (9) Comprehensive implementation plan on maternal, infant and young child nutrition. Geneva: World
                        Health Organization; 2014.
                        <br>

                        (10) Global action plan for the prevention and control of NCDs 2013–2020. Geneva: World Health
                        Organization; 2013.
                        <br>

                        (11) Guideline: Potassium intake for adults and children. Geneva: World Health Organization; 2012.
                        <br>

                        (12) Mozaffarian D, Fahimi S, Singh GM, Micha R, Khatibzadeh S, Engell RE et al. Global sodium
                        consumption and death from cardiovascular causes. N Engl J Med. 2014; 371(7):624–34.
                        <br>

                        (13) Te Morenga LA, Howatson A, Jones RM, Mann J. Dietary sugars and cardiometabolic risk:
                        systematic review and meta-analyses of randomized controlled trials of the effects on blood pressure
                        and lipids. AJCN. 2014; 100(1): 65–79.
                        <br>

                        (14) Global strategy on diet, physical activity and health. Geneva: World Health Organization; 2004.
                        <br>

                        (15) Set of recommendations on the marketing of foods and non-alcoholic beverages to children.
                        Geneva: World Health Organization; 2010.
                        <br>

                        (16) Report of the Commission on Ending Childhood Obesity. Geneva: World Health Organization; 2016.
                        <br>

                        (17) Rome Declaration on Nutrition. Second International Conference on Nutrition. Rome: Food and
                        Agriculture Organization of the United Nations/World Health Organization; 2014.
                        <br>

                        (18) Framework for Action. Second International Conference on Nutrition. Rome: Food and Agriculture
                        Organization of the United Nations/World Health Organization; 2014.
                        <br>

                        (19) Thirteenth general programme of work, 2019–2023. Geneva: World Health Organization; 2018.
                        <br>

                        ресурс:
                    </p>

                    <a href="https://www.who.int/ru/news-room/fact-sheets/detail/healthy-diet">
                        https://www.who.int/ru/news-room/fact-sheets/detail/healthy-diet
                    </a>

                </div>

            </div>
        </div>
    </div>
@endsection
