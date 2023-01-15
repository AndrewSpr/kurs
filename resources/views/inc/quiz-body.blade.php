<div class="quiz-body hidden">
    <div class="box">
        <div class="title">Опрос</div>
        <div class="subtitle">Заполните каждое поле в зависимости от ваших предпочтений</div>
        <form action="quiz/submit" class="quiz-body__quiz" method="POST">
            @csrf
            <div class="quiz__box">
                <div class="quiz__item">
                    <label class="quiz__label" for="name">Ваше имя и фамилия?</label>
                    <input required="true" type="text" name="name" placeholder="Введите в это поле ваше имя и фамилию" class="quiz__input">
                </div>      
                <div class="quiz__item">
                    <label class="quiz__label" for="carMark">Любимая марка машины?</label>
                    <input required="true" type="text" name="carMark" placeholder="Ваша любимая марка машины? Подумайте хорошенько" class="quiz__input">
                </div>  
                <div class="quiz__item">
                    <label class="quiz__label" for="whyCar">Почему именно она?</label>
                    <textarea required="true"  name="whyCar" id="message"  placeholder="Так почему же?" cols="6" rows="6"></textarea>
                </div>    
                <div class="quiz__item">
                    <label class="quiz__label" for="name">Автомат или механика?</label>
                    <div class="quiz__item-checkboxes">
                        <input type="checkbox" name="automatic" id="automatic"><label for="automatic">Автомат</label>
                        <input type="checkbox" name="mechanic" id="mechanic"><label for="mechanic">Механика</label>
                    </div>
                </div>           
                <div class="quiz__item">
                    <label class="quiz__label" for="exp">Ваш опыт в вождении?</label>
                    <input required="true" type="text" name="exp" placeholder="Введите количество лет за рулем" class="quiz__input">
                </div>
                <div class="quiz__item">
                    <label class="quiz__label" for="comment">Дополнительный комментарий!</label>
                    <textarea name="message" id="message" cols="8" rows="8"></textarea>
                </div>   
                <button class="button" type="submit" name="sendForm">Закончить заполнение</button>
            </div>
        </form>
    </div>
</div>