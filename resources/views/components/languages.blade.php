<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Languages</h2>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div id="language-list" class="row row-cols-1 row-cols-md-3 mb-4">


                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<script>
    LanguageList();
    async function LanguageList() {
        try {
            let URL = '/languageData'


            let response = await axios.get(URL);


            debugger;
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');


            response.data.forEach((item) => {
                document.getElementById('language-list').innerHTML += (`<div class="col p-2 mb-4 mb-md-0">
                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                       ${item['name']}
                    </div>
                    </div>`)
            })

        } catch (error) {
            alert(error);
        }
    }
</script>
