const body = document.querySelector("body"),
        nav = document.querySelector("nav"),
        modeToggle = document.querySelector(".dark-light"),
        searchToggle = document.querySelector(".searchToggle"),
        siderbarClose = document.querySelector(".sidebarClose"),
        sidebarOpen = document.querySelector(".sidebarOpen");


        let getMode = localStorage.getItem("mode");
            if(getMode && getMode === "dark-mode"){
                body.classList.add("dark");
            }
       

        modeToggle.addEventListener("click" , () =>{
            modeToggle.classList.toggle("active");
            body.classList.toggle("dark");

            if(!body.classList.contains("dark")){
                localStorage.setItem("mode", "light-mode")
            }else{
                localStorage.setItem("mode", "dark-mode")
            }
        })

    searchToggle.addEventListener("click" , () =>{
            searchToggle.classList.toggle("active");
            })


            sidebarOpen.addEventListener("click" , () =>{
                nav.classList.add("active");
            });

            body.addEventListener("click" , e  =>{
                let clickedElm = e.target;

                if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){}
                nav.classList.remove("active");
            })

            function pesquisar() {
                
                let destino = document.getElementById("destino").value;
                let entrada = document.getElementById("entrada").value;
                let saida = document.getElementById("saida").value;
                let hospedes = document.getElementById("hospedes").value;
            
               
                if (destino.trim() === "" || entrada.trim() === "" || saida.trim() === "") {
                    alert("Por favor, preencha todos os campos!");
                    return;
                }
            
              
                alert(`Buscando hotéis em ${destino} de ${entrada} até ${saida} para ${hospedes}.`);
            }
            
            
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelector(".button-4").addEventListener("click", pesquisar);
            });

          