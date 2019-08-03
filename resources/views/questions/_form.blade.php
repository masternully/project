@csrf
                        <div class="form-group">
                            <label for="question_title">Question Title</label>
                            <input type="text" value="{{old('title', $question->title)}}" name="title" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">

                           @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('title') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question_class">class</label>
                            <input type="text" value="{{old('class', $question->class)}}" name="class" id="question-class" class="form-control {{ $errors->has('class') ? 'is-invalid' : '' }}">

                           @if ($errors->has('class'))
                                <div class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('class') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question_images">Images</label>
                            <input type="file" value="{{old('images', $question->images)}}" multiple="true" id="question-images" name="images[]">

                           @if ($errors->has('images'))
                                <div class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('images') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question_body">Body</label>
                            <textarea name="body" id="question-body" row="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{old('body', $question->body)}}</textarea>
                        
                            @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('body') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question_desc">Desc</label>
                            <textarea name="desc" id="question-desc" row="10" class="form-control {{ $errors->has('desc') ? 'is-invalid' : '' }}">{{old('desc', $question->desc)}}</textarea>
                        
                            @if ($errors->has('desc'))
                                <div class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('desc') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question_armory">Armory</label>
                            <input type="text" value="{{old('armory', $question->armory)}}" name="armory" id="question_armory" class="form-control {{ $errors->has('armory') ? 'is-invalid' : '' }}">
                        
                            @if ($errors->has('armory'))
                                <div class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('armory') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question_price">Price</label>
                            <input type="text" value="{{old('price', $question->price)}}" name="price" id="question_price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}">
                        
                            @if ($errors->has('price'))
                                <div class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('price') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">{{$buttonText}}</button>
                        </div>