<button id="edit-plan-btn" type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#edit-plan-modal">
    See Details
</button>

<!-- Modal -->
<div class="modal fade" id="edit-plan-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="form.php" method="post">

                    <!-- City -->
                    <div class="col-md-6">
                        <label for="inputtext1" class="form-label">City *</label>
                        <input name="city_name" id="editCity" class="form-control" readonly>
                        </input>
                    </div>



                    <!-- destination options -->
                    <div class="col-md-6">
                        <label for="inputtext2" class="form-label">Options to explore
                            *</label>
                        <input name="option" id="editOption" class="form-control" readonly>

                        </input>
                    </div>


                    <!-- Sights -->
                    <div class="col-md-12">
                        <label for="inputtext3" class="form-label">Sights to visit *</label>
                        <input name="sight" id="editSight" class="form-control" readonly>
                        </input>
                    </div>


                    <!-- Restaurants -->
                    <div class="col-md-9">
                        <label for="inputtext4" class="form-label">Restaurants</label>
                        <input name="restaurant" id="editRestaurent" class="form-control" readonly>
                        </input>
                    </div>

                    <!-- Budget for restaurant -->
                    <div class="col-md-3">
                        <label for="restaurant-budget" class="form-label">Budget</label>
                        <div id="edit-restaurant-budget"></div>
                    </div>

                    <!-- Hotels -->
                    <div class="col-md-8">
                        <label for="inputtext5" class="form-label">Hotels</label>
                        <input name="hotel" id="editHotel" class="form-control" readonly>

                        </input>
                    </div>

                    <!-- Budget for Hotels -->
                    <div class="col-md-4">
                        <label for="hotel-budget" class="form-label"></label>
                        <input id="edit-hotel-budget" class="form-control" readonly>

                        </input>
                    </div>

                    <!-- Rent a car -->
                    <div class="col-md-7">
                        <label for="inputtext6" class="form-label">Car Type</label>
                        <input name="car" id="editCar" class="form-control" readonly>

                        </input>
                    </div>

                    <!-- Budget for car -->
                    <div class="col-md-5">
                        <label for="car-budget" class="form-label">1 DayBudget</label>
                        <div id="edit-car-budget"></div>
                    </div>
                    <!-- Person number -->
                    <div class="col-md-5">
                        <label for="member-count" class="form-label">Members</label>
                        <input id="edit-member-count" min="0" max="50" class="form-control" readonly>
                    </div>
                </form>
            </div>
            <div id="save-plan-msg"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Proceed</button>
                <button type="button" class="btn btn-primary" id="save-plan">Save</button>
            </div>
        </div>
    </div>
</div>