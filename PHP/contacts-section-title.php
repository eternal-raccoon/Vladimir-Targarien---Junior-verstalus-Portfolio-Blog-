<!-- Шестая секция ("Контакты") -->
<section class="contacts" id="Contactor">
    <div class="container clearfix">
      <h2>Как со мной связаться?</h2>
      <p class="special">Заполните и отправьте эту форму...
      <br>...и я развею оставшиеся у Вас сомнения!</p>
      <form class="feedback-form" action="/Rimidalv-mail" method="post">
        <div class="feedback-form-group left-part">
          <label class="upper-label" for="original-name">Имя и фамилия:</label>
          <input type="text" name="raccoon-fullname" id="original-name" placeholder="Владимир Таргариен" required>
        </div>
        <div class="feedback-form-group right-part">
          <label class="upper-label" for="nick-name">Никнэйм:</label>
          <input type="text" name="raccoon-fullnick" id="nick-name" placeholder="Галактический Енот">
        </div>
        <div class="clearfix">
          <div class="feedback-form-group left-part">
            <label class="upper-label" for="phone">Контактный телефон:</label>
            <input type="text" name="raccoon-phone" id="phone" pattern="[0-9]{1}-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="8-919-616-17-24">
          </div>
          <div class="feedback-form-group right-part">
            <label class="upper-label" for="email">Электронная почта:</label>
            <input type="text" name="raccoon-email" id="email" placeholder="GalaxyCoon@yandex.ru" required>
          </div>
        </div>
        <div class="checkbox-area">
          <label>
          <input type="checkbox" name="subscription" checked>Я согласен(-на) получать уведомления на телефон!
          </label>
        </div>
      <div class="feedback-form-group">
        <label class="upper-label" for="topic">Тема обращения:</label>
        <select name="topic" id="topic">
          <option value="1">Консультация перед заказом</option>
          <option value="2" selected>Оформление заказа</option>
          <option value="3">Предложение новых акций</option>
          <option value="4">Оставить отзыв</option>
          <option value="5">Замечание по контенту блога</option>
        </select>
      </div>
      <div class="feedback-form-group">
        <label class="upper-label" for="message">Текст обращения:</label>
          <textarea name="message" id="message" placeholder="Я назову планету именем твоим... Ой! Я хотел спросить: сверстаешь мне лендинг о терраформировании Марса?" required></textarea>
      </div>
        <input class="button-send upper-button" type="submit" value="Отправить">
      </form>
      <p class="upper special">или</p>
      <p class="special">Свяжитесь со мной в <a class="ref-insource" href="#Social">социальных сетях</a></p>
    </div>
  </section>