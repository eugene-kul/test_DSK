'use strict';

const react = React.createElement;
const modal = document.querySelector('#modal')

const rebootPage = () => {
	location.reload(false);
}

const removeModal = () => {
	ReactDOM.unmountComponentAtNode(modal)
}

const modalHandler = (name) => {
	ReactDOM.render(
		react(Modal, {name}),
		modal
	);
	initMask('.js-phone-mask')
}

const Modal = (props) => {
	const name = props.name
	return (
		<div className='react-modal'>
			<div className='react-modal-backdrop' onClick={removeModal}></div>
			<div className='react-modal-content'>
				<div className='react-modal-close' onClick={removeModal}>✖</div>
				<div className='react-modal-title'>{name}<span>Узнать точную стоимость.</span></div>
				<form action='#' method='POST'
					data-request='onSend'
					data-request-success='sendMsg(this);'
					data-request-error='noSendMsg(this);'
				>
					<input type="hidden" name='Форма' value={`Узнать стоимость: ${name}`}/>
					<input type='text' name='Имя' placeholder='Ваше имя'/>
					<input type='text' name='Телефон' placeholder='Телефон' className='js-phone-mask' required pattern="[0-9,\(,\),\-,+,\s]{18}"/>
					<button className='apartment-button' type='submit'>Отправить заявку</button>
					<div className="modal-success js-form-success">
						<p className="modal-success-title">Ваша заявка успешно отправлена!</p>
						<p className="modal-success-text">Мы свяжемся с вами в ближайшее время для подтверждения и уточнения всех деталей</p>
					</div>
					<div className="modal-success-error js-form-error">
						<p>Ошибка отправки формы, пожалуйста, обновите страницу и попробуйте еще раз<br/></p>
						<button type="button" onClick={rebootPage}>Обновить</button>
					</div>
				</form>
			
			</div>
		</div>
	)
}

const Apartments = (props) => {
	const state = props.state
	return (
		<div className='apartment' >
			<div className='apartment-image-block'>
				<div className='fotorama'>
					{
						props.images.map(image => {
							return <img key={image.id} src={image.path} alt={image.title || image.description || image.file_name}/>
						})
					}
				</div>
			</div>
			<div className='apartment-content-block'>
				<h2 className='apartment-title'>{state.name}</h2>
				<p className='apartment-deadline'>Срок сдачи: {state.deadline}</p>
				<p className='apartment-tags'>{state.tags.replace(',', ', ')}</p>
				<div className='apartment-payment'>
					<span className='apartment-payment-text'>Первоначальный взнос:</span>
					<span className='apartment-payment-price'>от {parseInt(state.initial_payment).toLocaleString()} ₽</span>
				</div>
				
				<div className='apartment-price'><span>Цена:</span> от {parseInt(state.price).toLocaleString()} Руб.</div>
				<button className='apartment-button' type='button' onClick={() => modalHandler(state.name)}>Узнать цену</button>
			</div>
		</div>
	)
}

document.querySelectorAll('.apartments')
.forEach(element => {
	const id = parseInt(element.dataset.index, 10);
	const state = JSON.parse(element.dataset.props);
	const images = JSON.parse(element.dataset.images);
	
	ReactDOM.render(
		react(Apartments,{state, id, images}),
		element
	);
});



