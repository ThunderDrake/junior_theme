import GraphModal from 'graph-modal';
const modal = new GraphModal({
  isOpen: (modal) => {
    if(modal.modalContainer.querySelector('.modal__video')) {
      const modalVideo = modal.modalContainer.querySelector('.modal__video').getAttribute('data-video');
      const video = modal.modalContainer.querySelector('video');

      video.setAttribute('src', modalVideo)
    }
  },
  isClose: (modal) => {
    if(modal.modalContainer.querySelector('video')) {
      const video = modal.modalContainer.querySelector('video');

      video.setAttribute('src', '')
    }
  }
});

export default modal;
