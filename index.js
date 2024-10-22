// Arg const characters
let select = "";
let selectImage = "";
let selectIndex = "";

const changeSelector = (index) => {
  const item = document.querySelector(`#selector-${characters[index].id}`);
  const imageSelected = document.querySelector(`#image-${characters[index].id}`);
  if(select){
      select.classList.remove("is-active");
  }
  if(selectImage){
    selectImage.classList.remove("is-active");
  }
  imageSelected.classList.add("is-active");
  item.classList.add("is-active");
  select = item;
  selectImage = imageSelected;
  selectIndex = index;
};
const initSelector = () => {
  if (characters.length) {
    changeSelector(0)
  }
};
const addEventClickButton = () => {
  if (characters.length) {
    characters.forEach((element, index) => {
      const button = document.querySelector(`#selector-${element.id} button`);
      button.addEventListener("click", () => {
        changeSelector(index);
      });
    });
  }
};

const addEventArrowButton = () => {
  if (characters.length) {
    document.addEventListener("keydown", function (event) {
      switch (event.key) {
        case "ArrowLeft":
          selectIndex =
            selectIndex > 0 ? selectIndex - 1 : characters.length - 1;
          break;
        case "ArrowRight":
          selectIndex =
            selectIndex < characters.length - 1 ? selectIndex + 1 : 0;
          break;
      }
      changeSelector(selectIndex);
    });
  }
};

document.addEventListener("DOMContentLoaded", function (event) {
  //código a ejecutar cuando existe la certeza de que el DOM está listo para recibir acciones
  initSelector();
  addEventClickButton();
  addEventArrowButton();
});
