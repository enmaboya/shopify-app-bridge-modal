<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta
            name="csrf-token"
            content="{{ csrf_token() }}"
        >
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <meta
            name="shopify-disabled-features"
            content="fetch"
        />
        <meta
            name="shopify-api-key"
            content="{{ config('shopify-app.api_key') }}"
        />
        <script src="https://cdn.shopify.com/shopifycloud/app-bridge.js"></script>

        <title>{{ \Osiset\ShopifyApp\Util::getShopifyConfig('app_name') }}</title>
    </head>

    <body>
        <div class="app-wrapper">
            <div class="app-content">
                <main role="main">
                    <ui-modal id="modalWithSmallContent">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt incidunt
                            nostrum amet, omnis modi eaque minima ipsam veniam numquam veritatis officia nisi beatae
                            maxime magnam esse eius velit tempore!</p>
                        <ui-title-bar title="modal with small content">
                            <button onclick="document.getElementById('modalWithSmallContent').hide()">click</button>
                        </ui-title-bar>
                    </ui-modal>

                    <ui-modal id="modalWithLargeContent">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni aspernatur cumque
                            quibusdam totam eum accusamus dolor asperiores at. Officiis totam fugit sapiente sit sunt ad
                            porro vel minima, ducimus quidem culpa voluptas unde molestiae earum libero nostrum
                            accusantium dolores iste architecto numquam modi! Accusantium est necessitatibus, modi optio
                            animi distinctio laudantium inventore et vitae pariatur odio ea neque vel magni perferendis
                            voluptatibus eius? Est quod, animi iusto doloribus adipisci iure quos saepe velit ipsam
                            quasi blanditiis inventore provident odio nesciunt excepturi quo esse repudiandae rerum,
                            quis earum eligendi dignissimos sunt ratione deleniti. Ex, ipsam laboriosam expedita aut
                            eveniet debitis odio totam itaque animi facilis quidem at ab ea harum officiis repudiandae
                            ut molestiae non, nulla obcaecati. Incidunt explicabo inventore dolores a voluptatibus
                            eveniet magni laudantium vitae architecto quae sit sequi, officia excepturi quos non sed
                            omnis vero, optio quis odio amet fugiat veniam, laboriosam aspernatur. Explicabo totam sequi
                            quod asperiores accusamus, amet maxime eos eum maiores ad. Quos excepturi possimus quidem,
                            itaque, laboriosam, quaerat cumque iusto ratione saepe beatae voluptatum! Facilis provident
                            praesentium aspernatur beatae. Tenetur cupiditate unde, natus sequi deleniti vero
                            accusantium voluptatem sit. Perferendis recusandae repellat laudantium dolorem saepe,
                            similique possimus culpa, harum quo incidunt fugit aliquid!</p>
                        <ui-title-bar title="modal with lage content">
                            <button onclick="document.getElementById('modalWithLargeContent').hide()">click</button>
                        </ui-title-bar>
                    </ui-modal>

                    <p>
                        after opening a large modal window - the height of the small window will be equal to the size of
                        the large one and will not decrease any more.
                    </p>

                    <hr>

                    <p>
                        all code is in resources/views/welcome.blade.php file
                    </p>

                    <hr>

                    <button onclick="document.getElementById('modalWithSmallContent').show()">small modal</button>
                    <button onclick="document.getElementById('modalWithLargeContent').show()">large modal</button>
                </main>
            </div>
        </div>
    </body>

</html>
