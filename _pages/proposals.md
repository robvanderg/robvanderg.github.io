---
permalink: /proposals/
title: "Proposals"
---

Thesis project topics.
----------------------

Below I list some research ideas that I would like to supervise for a research
project/thesis or collaborate on. These can also be seen as research directions
that I'm interested in, so if you are interested in related projects feel free
to contact me as well (robv@itu.dk). 

For more information about how I normally supervise see: [Supervision statement](supervision.txt)

### How do language models learn morphologically rich languages?

Learning dynamics of language models on linguistic, especially syntactic,
patterns are well documented in English. ( [Language acquisition: do children
and language models follow similar learning
stages?](https://aclanthology.org/2023.findings-acl.773), [Subspace
Chronicles: How Linguistic Information Emerges, Shifts and Interacts during
Language Model Training](https://aclanthology.org/2023.findings-emnlp.879/))
English, however, represents only one  way of encoding information, other
families of languages encode information differently such as Turkic relying on
affixation or Slavic languages employing both word-order and irregular
affixation. This project is interested in studying learning dynamics of
language models under the lens of different typologies. The design is to train
multiple monolingual models (for data and example see:
https://arxiv.org/pdf/2408.10441), and evaluate various checkpoints from
different sizes with multilingual linguistics datasets such as MultiBlimp and
BLIMPPI and document how models progress on different aspect of the language.




### Cross lingual morphological segmenter

It has been shown that morphological segments are probably good input units 
for language models. However, high quality segmenters are only available for
a handful of languages. Most languages lack annotated data for this task, 
hence, a cross-lingual approach will enable more diverse experimentation with
morphs as inputs in language models. 

* [The SIGMORPHON 2022 Shared Task on Morpheme Segmentation](https://aclanthology.org/2022.sigmorphon-1.11)

### Cross-domain language classification
Language classification is the task of given an input text, predicting which
language it is written in. There has been a wide variety of benchmarks, models,
and evaluation strategies (see the survey below). In many cases previous work
reported near-perfect performance. However, recent work has shown that
cross-domain language classification is still far from being solved. At the
same time, language classification systems are almost only used in cross-domain
settings. Hence, this project will look at cross-domain performance: how can we
build more robust language classifiers. Recently, a web-crawl based humanly
annotated dataset was released (CommonLID), which makes a perfect test dataset
for this (as it is a popular target domain for language classifiers). 

* [Automatic Language Identification in Texts: A Survey](https://www.jair.org/index.php/jair/article/view/11675)
* [Identifying Open Challenges in Language Identification](https://aclanthology.org/2025.acl-long.891/)
* [CommonLID: Re-evaluating State-of-the-Art Language Identification Performance on Web Data](https://aclanthology.org/2026.acl-long.1527/)

### Language classification per script
Language classification models are often trained to distuingish hundreds to
thousands of languages. However, they are not written in the same script, and
it is inefficient to consider sub-spaces of the feature-space (as there is no
overlap in features across scripts), both in accuracy and efficiency. This 
project builds on existing benchmark and models, but separates them according
to the script that was used, which leads to more efficient and accurate models, 
and also can more clearly identify open issues (e.g. script X is mostly solved,
but for script Y there is still a lot of work to do).

* [Using a script to identify the script of a text](https://robvanderg.github.io/scripts/scripts/)
* [Automatic Language Identification in Texts: A Survey](https://www.jair.org/index.php/jair/article/view/11675)


### Multi-Language classification

Languages can alternate within a text, or even a sentence or a word. At the same 
time, a sentence can be acceptable in multiple (close) languages. These problems
are not taken into account in common language classification system, but having
these capabilities is crucial for data analysis, filtering, and processing. There
has been little work in this direction, especially with a large open label set.

* [MaskLID: Code-Switching Language Identification through Iterative Masking](https://aclanthology.org/2024.acl-short.43.pdf)
* [Much Gracias: Semi-supervised Code-switch Detection for Spanish-English: How far can we get?](https://aclanthology.org/2021.calcs-1.9.pdf)
* [Multi-label Scandinavian Language Identification (SLIDE)](https://aclanthology.org/2025.resourceful-1.33/)
* [VarDial Evaluation Campaign 2024: Commonsense Reasoning in Dialects and Multi-Label Similar Language Identification](https://aclanthology.org/2024.vardial-1.1/)


### Single language classification
In many situations, we are just looking to find data in a single language, e.g.
when we want to train an LLM. However, current language classification models
are trained as multiclass classifiers, commonly covering 10-2,000 languages.
This project proposes to rethink language classification as a binary problem, a
sentence is either in a language or not. Analysis will be done on multiple
languages and domains, comparing whether higher performance can be obtained
against multi-class classifiers. Confidence scores should be reliable, so that
the precision/recall tradeoff can be tuned.

### Syllable/phoneme level input to language models

Subwords are the most common input unit for language models. However, there is
no concensus on what they should encapsulate. Making subwords align to
syllables or phonemes could have beneficial effects for cross-lingual
evaluations and coverage. Previous work has already shown that converting
languages to the same script leads to better performance:

* [When Being Unseen from mBERT is just the Beginning:
Handling New Languages With Multilingual Language Models](https://aclanthology.org/2021.naacl-main.38.pdf)





### Translation, generation, or manual labour for instruction tuning

Instruction tuning refers to the phase of language model training where the
model learns how to respond to tasks. Many instruction tuning datasets have
been created for English recently. However, for other languages there is
usually (almost) no manually created data. In this case, people usually use
translated instructions from English data, or instructions generated by larger,
more accurate language models. However, a systematic comparison is lacking.
This project will investigate the amounts of data and costs of creating data
with the different approaches.


### Simplify then solve

There exist many variants of constructed languages, which are designed with
specific purposes in mind. Many of those are focused to ease language
processing for humans , for example [Basic
English](https://en.wikipedia.org/wiki/Basic_English) and [Learning
English](https://en.wikipedia.org/wiki/Learning_English_(version_of_English)).
If we are able to build a good machine translation model to these language
varieties, we can then evaluate the performance of NLP models after
translation. This project is probably mainly focused on (automatic) data
creation/curation.

### Automatic language processing of language varieties

More specifically, I would be interested in the automatic processing of
colloqial language, or gen x/y/z slang. But also other types of languages could
be interesting. For this project, you can select a language variety, and an
NLP task (e.g. POS tagging, term explanation, generation), then we create a small
test dataset, and try some approaches to solve the task on that dataset.

### SemEval competitions

SemEval hosts competitions on 11 varied NLP tasks, you can find more information 
about them here: https://semeval.github.io/SemEval2027/tasks . You can participate 
in your research project, which has the advantage that the data should be there
and the task is already defined. This is also a disadvantage (more constrained), 
and sometimes the data is not of very high quality. Of course, your own research
paper should still have its own research question(s) and answer(s).

### Remove whitespace information from vocabularies
Current vocabularies of language models consist of 20-40% of duplicate
subwords, the only difference between these duplicates is the information
whether the subword is word-initial (indicated with a double hashtag, or another
special character). Since the vocabulary takes up a large amount of the space of
the full model, this is a undesirable inefficiency. If we could use a different
strategy for encoding whitespaces we would gain in efficiency, and potentially
also in performance, as we might increase the amount of relevant overlap.


