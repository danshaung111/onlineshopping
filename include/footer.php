<!-- Footer -->
    <footer class="page-footer font-small bg-dark pt-4">
      <!-- Footer Elements -->
        <div class="container">
        <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-google-plus-g fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-dribbble fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
            </ul>
        <!-- Social buttons -->
        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-light py-3">All rights reseved |
            <a href="https://mdbootstrap.com/" class="text-light"> Design By Dan</a>
        </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

<!-- Detail Modal -->
<div class="modal fade" id="product_detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Item Detail</h3>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="" class="img-fluid pimg">
                        </div>
                        <div class="col-md-6">
                            <h4>Item Infomations</h4>
                            <p class="pname"></p>
                            <p class="pbrand"></p>
                            <p class="psubcategory"></p>
                            <p class="pprice"></p>
                            <p class="pdiscount"></p>
                            <p class="pdescription"></p>
            
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" name="" id="qty" class="form-control w-50">
                            </div>
                            <button class="btn btn-outline-success">Buy Now</button>
                            <button class="btn btn-outline-success addtocart cart_data">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    

<script type="text/javascript" src="js/script.js"></script>

</body>
</html>