 <!-- Projects Section-->
 <section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                  
                </div>
        
                
            </div>
        </div>
    </div>
</section>


<script>
    GetProjectList();
    async function GetProjectList(){
        let URL = "projectsData"
        try{
            const response = await axios.get(URL);
            response.data.forEach((item) => {
                document.getElementById('project-list').innerHTML+=(`<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">${item['title']}</h2>
                                            <p>${item['details']}</p>
                                            <a class="text-decoration-none" target="_blank" herf="${item['previewlink']}">View Project</a>
                                        </div>
                                        <img class="img-fluid" src='${['thumbnaillink']}' alt="..." />
                                    </div>
                                </div>
                            </div>`)
            })
        }catch(error){
            alert(error)
        }
        let result = await axios.get(URL);
       
    }
</script>