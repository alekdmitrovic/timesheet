@include('includes/header')

<div class="modal">
    <div class="modal__content">
        <h2 class="heading">Create new employee</h2>
        <a href="#" class="modal__close">
            <span class="modal__icon"></span>
        </a>
        <form class="info" action="javascript">
            <div class="info__form">
                <ul class="info__wrapper">
                    <li class="info__list">
                        <label class="info__label">Name:</label>
                        <input type="text" class="in-text">
                    </li>
                    <li class="info__list">
                        <label class="report__label">Username:</label>
                        <input type="text" class="in-text">
                    </li>
                    <li class="info__list">
                        <label class="report__label">Hours per week:</label>
                        <input type="text" class="in-text">
                    </li>
                    <li class="info__list">
                        <label class="report__label">Email:</label>
                        <input type="text" class="in-text">
                    </li>
                    <li class="radio-button__wrapper">
                        <ul class="info__list-wrapper">
                            <li class="info__list-title">
                                <h4 class="radio-button__title">Status:</h4>
                            </li>
                            <li class="info__list-radio-button">
                                <input type="radio" id="rdo1" checked class="radio-input" name="radio-group-status">
                                <label for="rdo1" class="radio-label"> <span class="radio-border"></span>Active</label>
                            </li>
                            <li class="info__list-radio-button">
                                <input type="radio" class="radio-input" name="radio-group-status">
                                <label for="rdo1" class="radio-label"> <span class="radio-border"></span>Inactive</label>
                            </li>
                        </ul>
                        <ul class="info__list-wrapper">
                            <li class="info__list-title">
                                <h4 class="radio-button__title">Role:</h4>
                            </li>
                            <li class="info__list-radio-button">
                                <input type="radio" id="rdo2" checked class="radio-input" name="radio-group-role">
                                <label for="rdo2" class="radio-label"> <span class="radio-border"></span>Admin</label>
                            </li>
                            <li class="info__list-radio-button">
                                <input type="radio" class="radio-input" name="radio-group-role">
                                <label for="rdo2" class="radio-label"> <span class="radio-border"></span>Worker</label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="btn-wrap">
                <button type="submit" class="btn btn--green"><span>Invite an employee</span></button>
            </div>
        </form>
    </div>
</div>
<div class="wrapper">
    <section class="content">
        <div class="main-content">
            <h2 class="main-content__title">Employees</h2>
            <div class="table-navigation">
                <a href="javascript:;" class="table-navigation__create btn-modal"><span>Create new employee</span></a>
            </div>
            <div class="accordion">
                <div class="accordion__intro">
                    <h4 class="accordion__title">Sladjana Miljanovic</h4>
                </div>
                <form class="accordion__content" action="javascript:;">
                    <div class="info">
                        <div class="info__form">
                            <ul class="info__wrapper">
                                <li class="info__list">
                                    <label class="info__label">Name:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list">
                                    <label class="report__label">Username:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list">
                                    <label class="report__label">Hours per week:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list">
                                    <label class="report__label">Email:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list-title">
                                    <h4 class="radio-button__title">Status:</h4>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" checked class="radio-input" name="radio-group-status-second">
                                    <label class="radio-label"> <span class="radio-border"></span>Active</label>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" class="radio-input" name="radio-group-status-second">
                                    <label class="radio-label"> <span class="radio-border"></span>Inactive</label>
                                </li>
                                <li class="info__list-title">
                                    <h4 class="radio-button__title">Role:</h4>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" checked class="radio-input" name="radio-group-role-second">
                                    <label class="radio-label"> <span class="radio-border"></span>Admin</label>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" class="radio-input" name="radio-group-role-second">
                                    <label class="radio-label"> <span class="radio-border"></span>Worker</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button type="submit" class="btn btn--green"><span>Save changes</span></button>
                        <button type="button" class="btn btn--red"><span>Delete</span></button>
                        <button type="button" class="btn btn--orange"><span>Change passwword</span></button>
                    </div>
                </form>
            </div>
            <div class="accordion">
                <div class="accordion__intro">
                    <h4 class="accordion__title">Sladjana Miljanovic</h4>
                </div>
                <form class="accordion__content" action="javascript:;">
                    <div class="info">
                        <div class="info__form">
                            <ul class="info__wrapper">
                                <li class="info__list">
                                    <label class="info__label">Name:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list">
                                    <label class="report__label">Username:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list">
                                    <label class="report__label">Hours per week:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list">
                                    <label class="report__label">Email:</label>
                                    <input type="text" class="in-text">
                                </li>
                                <li class="info__list-title">
                                    <h4 class="radio-button__title">Status:</h4>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" checked class="radio-input" name="radio-group-status">
                                    <label for="rdo1" class="radio-label"> <span class="radio-border"></span>Active</label>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" class="radio-input" name="radio-group-status">
                                    <label class="radio-label"> <span class="radio-border"></span>Inactive</label>
                                </li>
                                <li class="info__list-title">
                                    <h4 class="radio-button__title">Role:</h4>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" checked class="radio-input" name="radio-group-role">
                                    <label class="radio-label"> <span class="radio-border"></span>Admin</label>
                                </li>
                                <li class="info__list-radio-button">
                                    <input type="radio" class="radio-input" name="radio-group-role">
                                    <label class="radio-label"> <span class="radio-border"></span>Worker</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button type="submit" class="btn btn--green"><span>Save changes</span></button>
                        <button type="button" class="btn btn--red"><span>Delete</span></button>
                        <button type="button" class="btn btn--orange"><span>Change passwword</span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="pagination">
            <ul class="pagination__navigation">
                <li class="pagination__list">
                    <a class="pagination__button" href="javascript:;">Previous</a>
                </li>
                <li class="pagination__list">
                    <a class="pagination__button pagination__button--active" href="javascript:;">1</a>
                </li>
                <li class="pagination__list">
                    <a class="pagination__button" href="javascript:;">2</a>
                </li>
                <li class="pagination__list">
                    <a class="pagination__button" href="javascript:;">3</a>
                </li>
                <li class="pagination__list">
                    <a class="pagination__button" href="javascript:;">4</a>
                </li>
                <li class="pagination__list">
                    <a class="pagination__button" href="javascript:;">Next</a>
                </li>
            </ul>
        </div>
    </section>
</div>
</div>

@include('includes/footer')
