<button class="gaccca-button-save"><i class="fas fa-less-than"></i></button>
            <button class="gaccca-button-save"><i class="fas fa-greater-than"></i></button>
            <button class="gaccca-button-save gaccca-margin-left">Search</button>
            <table>
                <tr>
                    <th>S.No.</th>
                    <th>Sim Card Number</th>
                    <!-- <th>Requested Area Code</th> -->
                    <th>activated Phone number by Aerobile</th>
                    <th>Status</th>
                    <th>Customer Information</th>
                    <th>PLAN</th>
                    <th>Activation Date US Time</th>
                    <th>Activation confirmed from Aerobile</th>
                    <th>Auto-renew after 30 days</th>
                    <th>Cancellation request on ....<br> for....<br> by customer </th>
                    <th>Dactivation Date by Aerobile /SM</th>
                    <th>Credit Card Detail</th>
                    <th>Payment Submited By Aerobile</th>
                    <th>Service End date / next renewal</th>
                    <th>Transaction ID</th>
                    <th>Notes</th>


                </tr>
                <tr>
                    <td></td>
                    <td> <input type="text" name="sim_card_no" class="gaccca-input" /></td>
                    <!-- <td>  <input type="text" name="sim_card_no"  class="gaccca-input" /></td> -->
                    <td> <input type="text" name="sim_card_no" class="gaccca-input" /></td>
                    <td></td>
                    <td> <input type="text" name="sim_card_no" class="gaccca-input" /></td>
                    <td> <input type="text" name="sim_card_no" class="gaccca-input" /></td>
                    <td> <input type="text" name="sim_card_no" class="gaccca-input-date" /></td>
                    <td><select class="gaccca-select" id="existing-customer-list">
                            <option value="j1"></option>

                        </select></td>
                    <td><select class="gaccca-select" id="existing-customer-list">
                            <option value="j1"></option>

                        </select></td>
                    <td> <input type="text" name="sim_card_no" class="gaccca-input-date" /></td>
                    <td> <input type="text" name="sim_card_no" class="gaccca-input-date" /></td>
                    <td><input type="text" name="sim_card_no" class="gaccca-input" /></td>
                    <td><select class="gaccca-select" id="existing-customer-list">
                            <option value="j1"></option>

                        </select></td>
                    <td>From <br>
                        <input type="text" name="sim_card_no" class="gaccca-input-date" />
                        <br>
                        To
                        <input type="text" name="sim_card_no" class="gaccca-input-date" />

                    </td>
                    <td><input type="text" name="sim_card_no" class="gaccca-input" /></td>
                    <td><input type="text" name="sim_card_no" class="gaccca-input" /></td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>

                        <div class="popup-text" id="editdiv_simcard_{{$tab_name}}">
                            <div class="popup-title">Sim Card Number</div>
                            <input type="text" id="input_value_simcard_{{$tab_name}}" name="sim_card_no" class="gaccca-input" />
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_simcard_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_simcard_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>123456789</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_simcard_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>


                    </td>
                    <!-- <td>  </td> -->
                    <td>


                        <div class="popup-text" id="editdiv_phonenumber_{{$tab_name}}">
                            <div class="popup-title">activated Phone number by Aerobile</div>
                            <input type="text" id="input_value_phonenumber_{{$tab_name}}" name="sim_card_no" class="gaccca-input" />
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_phonenumber_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_phonenumber_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>+1 (213) 397-9671</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_phonenumber_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>


                    </td>
                    <td>
                        <div class="popup-text" id="editdiv_status_{{$tab_name}}">
                            <div class="popup-title">Status</div>
                            <select class="gaccca-select" id="input_value_status_{{$tab_name}}">
                                <option value="select">Select</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>

                            </select>
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_status_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_status_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>Active</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_status_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td> [GIS] HWANG SUYEON Expedited BREAK COVID-19
                        tndusdlcjs@naver.com
                        821077650392</td>
                    <td> Tmobile 50$ unlimited GB LTE</td>
                    <td> 6/24/2020</td>
                    <td>
                        <div class="popup-text" id="editdiv_activationConfirm_{{$tab_name}}">
                            <div class="popup-title">Activation confirmed from Aerobile</div>
                            <select class="gaccca-select" id="input_value_activationConfirm_{{$tab_name}}">
                                <option value="select">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_activationConfirm_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_activationConfirm_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>No</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_activationConfirm_{{$tab_name}}"><i
                                class="fas fa-pencil-alt"></i></a>
                    <td>


                        <div class="popup-text" id="editdiv_autoRenew_{{$tab_name}}">
                            <div class="popup-title">Activation confirmed from Aerobile</div>
                            <select class="gaccca-select" id="input_value_autoRenew_{{$tab_name}}">
                                <option value="select">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_autoRenew_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_autoRenew_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>Yes</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_autoRenew_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>

                    </td>
                    <td> </td>
                    <td>
                        <div class="popup-text" id="editdiv_dactivationDate_{{$tab_name}}">
                            <div class="popup-title">Dactivation Date by Aerobile /SM</div>
                            <input type="text" id="input_value_dactivationDate_{{$tab_name}}" name="sim_card_no"
                                class="gaccca-input-date" />
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_dactivationDate_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_dactivationDate_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span></span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_dactivationDate_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>

                    </td>
                    <td>CC Number:
                        4815-8202-0765-4391
                        Name On CC:
                        SUYEON HWANG
                        CC Valid: 03/24
                        CVC: 713</td>
                    <td>

                        <div class="popup-text" id="editdiv_paymentSubmited_{{$tab_name}}">
                            <div class="popup-title">Activation confirmed from Aerobile</div>
                            <select class="gaccca-select" id="input_value_paymentSubmited_{{$tab_name}}">
                                <option value="select">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_paymentSubmited_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_paymentSubmited_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>Yes</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_paymentSubmited_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td>
                        <div class="popup-text" id="editdiv_serviceEndDate_{{$tab_name}}">
                            <div class="popup-title">Dactivation Date by Aerobile /SM</div>
                            <input type="text" id="input_value_serviceEndDate_{{$tab_name}}" name="sim_card_no"
                                class="gaccca-input-date" />
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_serviceEndDate_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_serviceEndDate_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>9/12/2020</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_serviceEndDate_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>

                        <br>
                        <a href="javascript:void(0)">Click ToSend
                            Transaction failure
                            Email </a>

                    </td>

                    <td>

                        <div class="popup-text" id="editdiv_TransactionID_{{$tab_name}}">
                            <div class="popup-title">Sim Card Number</div>
                            <textarea id="input_value_TransactionID_{{$tab_name}}" class="gaccca-textarea"></textarea>
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_TransactionID_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_TransactionID_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>8/17:8P228961BN713831M 7/24: 25S7059913669113W 6/24: 6PP98740NK1694245 3/12:
                            0LW99376TK814744J(use -2351 credit card) 2/14: 77N98491E3766453E</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_TransactionID_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>




                    </td>



                    <td>



                        <div class="popup-text" id="editdiv_Notes_{{$tab_name}}">
                            <div class="popup-title">Sim Card Number</div>
                            <textarea id="input_value_Notes_{{$tab_name}}" class="gaccca-textarea"></textarea>
                            <div class="button-div">
                                <button class="gaccca-button-save" id="save_button_Notes_{{$tab_name}}"><i
                                        class="fas fa-check"></i></button>
                                <button class="gaccca-button-save" id="close_button_Notes_{{$tab_name}}"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <span>3/12: customer changed his credit card to -4391 on 2/22 2/14: wrong CC info, email sent to
                            the client.</span>
                        <a href="javascript:void(0)" class="edit-pencil" id="edit_Notes_{{$tab_name}}"><i class="fas fa-pencil-alt"></i></a>

                    </td>


                </tr>

            


            </table>