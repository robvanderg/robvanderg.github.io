---
permalink: /projects/
title: "Projects"
---

Thesis project topics.
----------------------

Below I list some research ideas that I would like to supervise for a research project/thesis or collaborate on. These can also be seen as research directions that I'm interested in, so if you are interested in related projects feel free to contact me as well (robv@itu.dk).

For more information about how I normally supervise see: [Supervision statement](supervision.txt)


### Shared tasks
Shared tasks in NLP are organized competitions where you are provided with a dataset and compete with other teams. The test data is kep secret, and will be released at the same time for all participants, where you typically have approximately 1 week to upload your predictions. As a part of the shared task, you can also submit a paper. The dates of SemEval 2025 align well with the fall semester, and the tasks they organize usually provide a nice scope for a thesis project:

* SemEval 2025: [https://semeval.github.io/SemEval2025/tasks](https://semeval.github.io/SemEval2025/tasks)

### How to learn from different sources

When training an NLP model on a variety of datasets, from different sources (and with different underlying distributions), it could be informative for the model to know about the origin of the text. A variety of methods can be used to inorporate this information, including:

*   Dataset embeddings: [Many Languages, One Parser](https://aclanthology.org/Q16-1031.pdf)
*   Just include the domain as a special start token, like \[SOCIAL\] or \[NEWS\].
*   Let the model predict the origin of the input as auxiliary task.

These methods have shown promising results in isolated setups, but have never been consistently compared.

### Cross-domain lexical normalization
Lexical normalization is the task of converting non-standard language to standard language on the word level. For this task, most of the focus has been on data from Twitter. However, there are many other types of non-standard language. This project can ask two questions: 1) how does performance drop on other domains 2) how can we build more robust lexical normalization models. Most existing datasets can be found on:

* <a href="https://aclanthology.org/2021.wnut-1.55/">MultiLexNorm: A Shared Task on Multilingual Lexical Normalization
</a>
* <a href="https://noisy-text.github.io/2025/multi-lexnorm.html">MultiLexNorm 2</a>

This project includes data collection and annotation, but it should be noted that annotation for this task is relatively fast


### Using agents for cultural-aware language adaptations of children television
Cartoons can be a great resource for learning a language. However, they are
often only available in a few languages. Adapting these to another language is
expensive, as it requires understanding of the context, cultural aware
translation (much of the language use is conversational, unlike most
translation datasets), and text to speech. For each of these steps, a specific
NLP model (i.e. agent) can be used. One main challenge is the evaluation, 
where human judgements are probably necessary. 

### seq2seq versus sequence classification models

Recently, sequence-to-sequence (seq2seq) have become more and more powerful. A recent paper has shown that seq2seq models can perform on-par with sequence classification models through conversion of tasks to sequence generation tasks. However, the comparison is not direct, so it would be interesting to make a more direct comparison of an auto-encoder language model versus a generative one.

*  [Unleashing the True Potential of Sequence-to-Sequence Models for Sequence Tagging and Structure Parsing](https://aclanthology.org/2023.tacl-1.34.pdf)

### culture2vec

NLP models are known to be bad at understanding cultural dimensions. There are many open directions to improve this; one of them would be predicting cultural dimensions (for example from Hofstede, see reference below) based on texts, another one would be incorporating this information during training and prediction.


* <a href="https://en.wikipedia.org/wiki/Hofstede%27s_cultural_dimensions_theory">Hofstede's cultural dimensions</a>

### Effect of temperature on sampling of language models

During text generation with language model, one of the desiderata is to make the text human-like. Temperature is a smoothing technique which controls the randomness of language models outputs. This is one of the main parameters that controls the "style" of the output. This project investigates how temperature relates to human-ness of generated text, as judged by (a) human(s)

* <a href="https://huggingface.co/blog/how-to-generate">How to generate text: using different decoding methods for language generation with Transformers</a>


### Early stopping strategies

When training a neural model (in NLP), it is common to use a development split
to decide when to stop training. However, this has some downsides (see: [We
Need to Talk About train-dev-test
Splits](https://aclanthology.org/2021.emnlp-main.368.pdf) ). There have been
some alternative strategies proposed for model selection/early stopping. One
strategy is to train for a specific pre-defined number of steps, another one is
to look at train loss. However, to the best of my knowledge, no comparison of
these approaches has been done.

*  [Active Learning Helps Pretrained Models Learn the Intended Task](https://openreview.net/pdf?id=0Ww7UVEoNue)
*  [Model Selection for Cross-Lingual Transfer](https://aclanthology.org/2021.emnlp-main.459.pdf)

### Effect of sociodemographic factors on language use

Recent work has shown that including the origin of a text instance can improve performance on NLP tasks. However, it is unclear which specific sociodemographic attributes correlate with language use. Recent efforts on annotation of social media data could give us more insights.

*   [Women’s Syntactic Resilience and Men’s Grammatical Luck: Gender-Bias in Part-of-Speech Tagging and Dependency Parsing](https://www.aclweb.org/anthology/P19-1339.pdf)
*   [Gender Differences in English Syntax](https://journals.sagepub.com/doi/pdf/10.1177/007242030002005)
*   [Cross-lingual syntactic variation over age and gender](https://www.aclweb.org/anthology/K15-1011.pdf)


### Translation, generation, or manual labour for instruction tuning

Instruction tuning refers to the phase of language model training where the model learns how to respond to tasks. Many instruction tuning datasets have been created for English recently. However, for other languages there is usually (almost) no manually created data. In this case, people usually use translated instructions from English data, or instructions generated by larger, more accurate language models. However, a systematic comparison is lacking. This project will investigate the amounts of data and costs of creating data with the different approaches.


### The effect of translationese on slot and intent detection

The tasks of slot and intent detection is a crucial component of digital assisnents. Intent detection aims to find the goal of an utterance, and slot detection finds relevant entities. An example of this task:

| Add | reminder | to | swim   | at | 11am       | tomorrow   |
|     |          |    | B-TODO |    | B-DATETIME | I-DATETIME |

Intent: add-reminder

Recently, two big multi-lingual datasets have been introduced (multiAtis, and xSID). However, these datasets consist of data translated from English. Translationese is known to be different from spontaneous language. This project aims to estimate the effect of this difference. By generating a small sample of native non-English data (for example Danish), and evaluating this against the xSID data.

Here you can find the xSID paper, and an investigation on translationese for machine translation evaluation:

*   [From Masked Language Modeling to Translation: Non-English Auxiliary Tasks Improve Zero-shot Spoken Language Understanding](https://aclanthology.org/2021.naacl-main.197.pdf)
*   [The Effect of Translationese in Machine Translation Test Sets](https://aclanthology.org/W19-5208.pdf)

### Multi-lingual lexical normalization

Lexical normalization is the task of converting social media language to its canonical equivalent. Most literature on this problem is only tackling this task for one language. But in 2021, MultiLexNorm was introduced; including normalization datasets for 13 language variants. A wide variety of models was evaluated on this new benchmark, however all of these trained a single model for each language. However, at least three of these models can be used in a multi-lingual or cross-lingual setup, which could enable more efficiency, performance and transfer to new language for which no annotated data is available.

*   [MultiLexNorm: A Shared Task on Multilingual Lexical Normalization](https://aclanthology.org/2021.wnut-1.55.pdf)
*   Website for dataset: [Multi-LexNorm](http://noisy-text.github.io/2021/multi-lexnorm.html)


### Active learning for POS tagging

POS tagging is the task of classifying words into their syntactic category:

| I    | see  | the | light |
| PRON | VERB | DET | NOUN  |

Current POS tagger are usually supervised, which means they rely on human-annotated training data. This data commonly exists of thousands of sentences. To make this process less costly, one can select a more informative sample of words to rely on, and instead only annotate this subsample. Previous work (see below) has shown that competetive performance can be obtained with as little as 400 words on English news data. However, it is unclear how this transfers to other languages/domains. In this project, the first step is to evaluate the existing method on a larger sample (i.e. the [Universal Dependencies dataset](https://universaldependencies.org/)), followed by possible improvements to the model.

Related reading:

*   [Simple Semi-Supervised POS Tagging](https://www.aclweb.org/anthology/W15-1511.pdf)


### Tokenization of social media data

In many NLP benchmarks, tokenized texts are assumed as input to our models. For standard domains, tokenization can be considered a solved problem, however, for social media text tokenization is non-trivial. The goal of this project is to create a multi-lingual corpus and model for this task. Steps include:

*   Finding the original utterances of [Multi-LexNorm](http://noisy-text.github.io/2021/multi-lexnorm.html)
*   Create a gold standard dataset based on the original and the tokenized data.
*   Evaluate existing tokenizers and train your own.

Some related work:

*   [Universal Word Segmentation: Implementation and Interpretation](https://www.aclweb.org/anthology/Q18-1030.pdf)
*   [twokenize](https://github.com/myleott/ark-twokenize-py/blob/master/twokenize.py)
*   [nltk.TweetTokenizer](https://www.nltk.org/_modules/nltk/tokenize/casual.html#TweetTokenizer)

### Efficient language identification for many languages

Language identification is a standard NLP task, which is often considered to be solved. However, most current classifiers only support around 100 languages, or are not publicly available. This project makes use of the [LTI LangID Corpus](http://www.cs.cmu.edu/~ralf/langid.html)(with >1300 languages), and asks the question: how can we efficiently handle such a large label space, and such a wide variety in input-features. Relevant previous work:

*   [Non-linear Mapping for Improved Identification of 1300+ Languages](https://www.aclweb.org/anthology/D14-1069.pdf)
*   [A Fast, Compact, Accurate Model for Language Identification of Codemixed Text](https://www.aclweb.org/anthology/D18-1030.pdf)
*   [Language ID in the Wild: Unexpected Challenges on the Path to a Thousand-Language Web Text Corpus](https://www.aclweb.org/anthology/2020.coling-main.579.pdf)

### Cross-domain language identification

Most language identification models are trained and evaluated on a single domain. A cross-domain dataset can however relatively easily be compiled, and allows for testing existing language identification models for robustness. Some existing resources for a variety of domains are listed below:

*   [Accurate Language Identification of Twitter Messages](https://aclanthology.org/W14-1303.pdf)
*   [MassiveSumm: a very large-scale, very multilingual, news summarisation dataset](https://aclanthology.org/2021.emnlp-main.797.pdf)
*   [LTI LangID Corpus](http://www.cs.cmu.edu/~ralf/langid.html)
*   [Fandom Wiki's](https://robvanderg.github.io/datasets/wikia/)

### Dependency parsing of Danish social media data

Dependency parsing is the task of finding the syntactic relations between words in a sentence. [Chapter 14](https://web.stanford.edu/~jurafsky/slp3/14.pdf) of the Speech and Language Processing book contains a nice introduction to this topic. Many different languages and domains have been covered by the recent [Universal Dependencies project](https://universaldependencies.org/). However, for language types not covered performance is generally lower. Recently, we have collected some non-canonical data samples: [DaN+](https://www.aclweb.org/anthology/2020.coling-main.583.pdf), for which it is uncertain how well current methods would perform.

The goal of this project would be to annotate a small sample of Danish social media data to evaluate parsers. Then, a variety of approaches of adapting the parser could be studied, including the ones mentioned below:

*   [Challenges in Annotating and Parsing Spoken, Code-switched, Frisian-Dutch Data](https://www.aclweb.org/anthology/2021.adaptnlp-1.6.pdf)
*   [Cross-lingual Parsing with Polyglot Training and Multi-treebank Learning: A Faroese Case Study](https://www.aclweb.org/anthology/D19-6118.pdf)
*   [A systematic comparison of methods for low-resource dependency parsing on genuinely low-resource languages](https://www.aclweb.org/anthology/D19-1102.pdf)
*   [How to Parse Low-Resource Languages: Cross-Lingual Parsing, Target Language Annotation, or Both?](https://www.aclweb.org/anthology/W19-7713.pdf)
*   [Modeling Input Uncertainty in Neural Network Dependency Parsing](https://www.aclweb.org/anthology/D18-1542.pdf)

### Strategies for Morphological Tagging

Morphological tagging is the task of assigning labels to a sequence of tokens that describe them morphologically. This means that one word can have 0-n labels. There has been a variety of architectures proposed to solve this task, however it is unclear which method works best in which situation.

In this project you can make use of the [Universal Dependencies](https://universaldependencies.org/) data, which has annotation for morphological tags for many languages. You can use the [MaChAmp](https://machamp-nlp.github.io/) toolkit, or implement a BiLSTM tagger yourself, and evaluate at least the three most common strategies:

*   Predict the concatenation of the tags as one label (same as POS tagging, but with more labels)
*   Predict morphological tags as a sequence (like machine translation)
*   View the task as a multilabel prediction problem (Get a probability for each label, and set a cutoff threshold)

Related reading:

*   [The SIGMORPHON 2019 Shared Task: Morphological Analysis in Context and Cross-Lingual Transfer for Inflection](https://aclanthology.org/W19-4226/)
*   [Multi-Team: A Multi-attention, Multi-decoder Approach to Morphological Analysis.](https://aclanthology.org/W19-4206)


