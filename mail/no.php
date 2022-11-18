<!-- Кнопка активации -->
<label class="btn" for="modal-1">Открыть</label>
<!-- Модальное окно -->
<div class="modal">
  <input class="modal-open" id="modal-1" type="checkbox" hidden>
  <div class="modal-wrap" aria-hidden="true" role="dialog">
    <label class="modal-overlay" for="modal-1"></label>
    <div class="modal-dialog">
      <div class="modal-header">
        <h2>Заголовок </h2>
        <label class="btn-close" for="modal-1" aria-hidden="true">×</label>
      </div>
      <div class="modal-body">
        <p>Не вышло отослать сообщение. Попробуйте связатся с нами сами</p>
      </div>
      <div class="modal-footer">
        <label class="btn btn-primary" for="modal-1">Отлично!</label>
      </div>
    </div>
  </div>
</div>